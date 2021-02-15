<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetalleVentasRequest;
use App\Http\Requests\UpdateDetalleVentasRequest;
use App\Repositories\DetalleVentasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DetalleVentasController extends AppBaseController
{
    /** @var  DetalleVentasRepository */
    private $detalleVentasRepository;

    public function __construct(DetalleVentasRepository $detalleVentasRepo)
    {
        $this->detalleVentasRepository = $detalleVentasRepo;
    }

    /**
     * Display a listing of the DetalleVentas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detalleVentas = $this->detalleVentasRepository->paginate(10);

        return view('detalle_ventas.index')
            ->with('detalleVentas', $detalleVentas);
    }

    /**
     * Show the form for creating a new DetalleVentas.
     *
     * @return Response
     */
    public function create()
    {
        return view('detalle_ventas.create');
    }

    /**
     * Store a newly created DetalleVentas in storage.
     *
     * @param CreateDetalleVentasRequest $request
     *
     * @return Response
     */
    public function store(CreateDetalleVentasRequest $request)
    {
        $input = $request->all();

        $detalleVentas = $this->detalleVentasRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/detalleVentas.singular')]));

        return redirect(route('detalleVentas.index'));
    }

    /**
     * Display the specified DetalleVentas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detalleVentas = $this->detalleVentasRepository->find($id);

        if (empty($detalleVentas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/detalleVentas.singular')]));

            return redirect(route('detalleVentas.index'));
        }

        return view('detalle_ventas.show')->with('detalleVentas', $detalleVentas);
    }

    /**
     * Show the form for editing the specified DetalleVentas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detalleVentas = $this->detalleVentasRepository->find($id);

        if (empty($detalleVentas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/detalleVentas.singular')]));

            return redirect(route('detalleVentas.index'));
        }

        return view('detalle_ventas.edit')->with('detalleVentas', $detalleVentas);
    }

    /**
     * Update the specified DetalleVentas in storage.
     *
     * @param int $id
     * @param UpdateDetalleVentasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDetalleVentasRequest $request)
    {
        $detalleVentas = $this->detalleVentasRepository->find($id);

        if (empty($detalleVentas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/detalleVentas.singular')]));

            return redirect(route('detalleVentas.index'));
        }

        $detalleVentas = $this->detalleVentasRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/detalleVentas.singular')]));

        return redirect(route('detalleVentas.index'));
    }

    /**
     * Remove the specified DetalleVentas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detalleVentas = $this->detalleVentasRepository->find($id);

        if (empty($detalleVentas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/detalleVentas.singular')]));

            return redirect(route('detalleVentas.index'));
        }

        $this->detalleVentasRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/detalleVentas.singular')]));

        return redirect(route('detalleVentas.index'));
    }
}
