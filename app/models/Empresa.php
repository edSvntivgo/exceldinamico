<?php
class Empresas extends Eloquent{
		protected $table = "empresas2";
		protected $primaryKey = "id_empresa";
		protected $fillable = array("empresa","telefono","contacto","email_contacto","logo","pin","fondo","color");

		public function Pautas(){
			return $this->hasMany("Pautas","id_pauta","id_pauta");
		}

		public function Pauta(){
			return $this->belongsTo("Pautas", "id_empresa","id_empresa");
		}
	}
	