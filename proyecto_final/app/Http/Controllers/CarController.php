<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    
 
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    

    /**
     * Show the form for creating a new car.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created car in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // Validar los datos del formulario
       $validatedData = $request->validate([
        'brand' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'year' => 'required|integer',
        'color' => 'required|string|max:255',
        'price' => 'required|numeric',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Guardar la imagen en el sistema de archivos
    $imagePath = $request->file('image')->store('car_images', 'public');

    // Crear un nuevo carro con los datos validados y la ruta de la imagen
    $car = new Car();
    $car->brand = $validatedData['brand'];
    $car->model = $validatedData['model'];
    $car->year = $validatedData['year'];
    $car->color = $validatedData['color'];
    $car->price = $validatedData['price'];
    $car->image = $imagePath;
    $car->save();

    // Redireccionar al listado de carros
    return redirect()->route('cars.index')->with('success', 'Carro creado correctamente');
    }

  
      public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));

    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));
    }


    public function update(Request $request, $id)
    {
       
      // Validar los datos del formulario
    $validatedData = $request->validate([
        'brand' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'year' => 'required|integer',
        'color' => 'required|string|max:255',
        'price' => 'required|numeric',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Buscar el carro a actualizar
    $car = Car::findOrFail($id);

    // Actualizar los campos del carro
    $car->brand = $validatedData['brand'];
    $car->model = $validatedData['model'];
    $car->year = $validatedData['year'];
    $car->color = $validatedData['color'];
    $car->price = $validatedData['price'];

    // Actualizar la imagen si se ha proporcionado una nueva
    if ($request->hasFile('image')) {
        // Eliminar la imagen anterior
        Storage::disk('public')->delete($car->image);

        // Guardar la nueva imagen
        $imagePath = $request->file('image')->store('car_images', 'public');
        $car->image = $imagePath;
    }

    $car->save();

    // Redireccionar al listado de carros
    return redirect()->route('cars.index')->with('success', 'Carro actualizado correctamente');
    }   

    /**
     * Remove the specified car from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);

        // Eliminar la imagen asociada al carro
        Storage::disk('public')->delete($car->image);
    
        // Eliminar el carro de la base de datos
        $car->delete();
    
        // Redireccionar al listado de carros
        return redirect()->route('cars.index')->with('success', 'Carro eliminado correctamente');
    }
}
