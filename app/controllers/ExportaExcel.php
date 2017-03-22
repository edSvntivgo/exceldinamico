<?php
use App\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;

class ExportaExcel extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function Exportar(){
			Excel::create('LaravelExcel', function($excel) { 
		            $excel->sheet('Productos', function($sheet) {
		                $products = Exportar::all();
		                $sheet->fromArray($products);
		            });
		    })->store('csv', storage_path('excel/exports'));
		    $ruta='app/storage/excel/exports/LaravelExcel.csv';
			Mail::send('emails.auth.reminder',array('archivo'=>$ruta),function($message){
				$message->to('edlariossantiago@gmail.com')->subject('Nuevo Documento');
			//elimina archivo de la carpeta donde se guarda despues de enviar el correo
			unlink('app/storage/excel/exports/LaravelExcel.csv');
			});
			
	}
}
