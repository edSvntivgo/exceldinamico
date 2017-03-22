<?php
use App\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;

class SeleccionaExcel extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function Crear(){
			$campo=DB::getSchemaBuilder()->getColumnListing('os_anuncios');
			$campos=array('campo'=>$campo);
			return View::make('EscogeExcel.index',$campos);
	}
	public function ExcelCrear(){
			if (isset($_POST)) {
					$datos=$_POST['datos'];
					$datosarray=explode(",",$datos);
					$anuncios = Exportar::select($datosarray)->get();
					//$afin=explode(",",$anuncios);
					$data=array('datos'=>$datosarray,'anuncios'=>$anuncios);
					return View::make('EscogeExcel.excel',$data);

			}
	}

	/*public function Genera($data){
		if(isset($_POST)){
			Excel::create('reporteEspecial', function($excel) use($data){
				$excel->sheet('reporteEspecial', function($sheet) use ($data) {
	                
	                $sheet->fromArray($anuncios);
				});
			})->export('csv');
		}
	}*/
}