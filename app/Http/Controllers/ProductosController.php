<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductosRequest;
use App\Http\Requests\UpdateProductosRequest;
use App\Repositories\ProductosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Storage;
use Response;

class ProductosController extends AppBaseController
{
    /** @var  ProductosRepository */
    private $productosRepository;

    public function __construct(ProductosRepository $productosRepo)
    {
        $this->productosRepository = $productosRepo;
    }

    /**
     * Display a listing of the Productos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productos = $this->productosRepository->paginate(10);

        return view('productos.index')
            ->with('productos', $productos);
    }

    /**
     * Show the form for creating a new Productos.
     *
     * @return Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created Productos in storage.
     *
     * @param CreateProductosRequest $request
     *
     * @return Response
     */
    public function store(CreateProductosRequest $request)
    {
        $input = $request->all();
        $producto = $this->productosRepository->create($input);
        
        if($request->file('foto')){
            
            $path = Storage::disk('public')->put('photos',$request->file('foto'));
            $producto->fill(['foto'=>asset($path)])->save();
        }       

        Flash::success(__('messages.saved', ['model' => __('models/productos.singular')]));

        return redirect(route('productos.index'));
    }

    /**
     * Display the specified Productos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productos = $this->productosRepository->find($id);

        if (empty($productos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productos.singular')]));

            return redirect(route('productos.index'));
        }

        return view('productos.show')->with('productos', $productos);
    }

    /**
     * Show the form for editing the specified Productos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productos = $this->productosRepository->find($id);

        if (empty($productos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productos.singular')]));

            return redirect(route('productos.index'));
        }

        return view('productos.edit')->with('productos', $productos);
    }

    /**
     * Update the specified Productos in storage.
     *
     * @param int $id
     * @param UpdateProductosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductosRequest $request)
    {
        $productos = $this->productosRepository->find($id);

        if (empty($productos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productos.singular')]));

            return redirect(route('productos.index'));
        }

        $productos = $this->productosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/productos.singular')]));

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified Productos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productos = $this->productosRepository->find($id);

        if (empty($productos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productos.singular')]));

            return redirect(route('productos.index'));
        }

        $this->productosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/productos.singular')]));

        return redirect(route('productos.index'));
    }
}
