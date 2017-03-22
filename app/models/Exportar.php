<?php 
	class Exportar extends Eloquent{
		protected $table ="os_anuncios";
		protected $primaryKey = "id_anuncio";
		protected $fillable = array("id_anuncio",
									"id_empresa",
									"nombre",
									"clave",
									"clasificacion",
									"calle",
									"numero",
									"colonia",
									"cp",
									"delegacion",
									"estado",
									"tipo_avenida",
									"calle_colindante_1",
									"calle_colindante_2",
									"referencia",
									"latitud",
									"longitud",
									"direccion_google",
									"zona",
									"ancho",
									"alto",
									"iliminacion",
									"tipo",
									"vista_1",
									"vista_2",
									"material",
									"video",
									"video2",
									"calificacion",
									"pra",
									"lista",
									"negociadaProveedor",
									"listaVenta",
									"negociada",
									"impactos_mensaules",
									"disponible",
									"codigo",
									"target",
									"fecha_disponibilidad");

		protected $hidden = array("created_at","updated_at");

		public function Empresa(){
			return $this->hasOne("Empresa","id_empresa","id_empresa");
		}

		public function Galeria(){
			return $this->hasMany("GaleriaAnuncios","id_anuncio","id_anuncio");
		}

		public function ImagenPrincipal(){
			return $this->hasOne("GaleriaAnuncios","id_anuncio","id_anuncio")->where("principal","=",1);
		}
		public function AnuncioPauta(){
			return $this->belongsTo("OsAnunciosPauta","id_anuncio","id_anuncio");
		}

		Public function PautaAnuncios(){
			return $this->hasMany("OsAnunciosPauta","id_anuncio","id_anuncio");
		}
	}