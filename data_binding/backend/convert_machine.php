<?php

	class convert{
		public function __construct(){
			$this->loadCompiler();
		}



		public function ev($string){
			return eval($string);
		}

		public function base64_cikenc($string){
			$result = "";
			$encoded_base64 = base64_encode($string);
			foreach(str_split($encoded_base64) as $well){
				$result .= $this->loadCompiler()["to_numb"][$well]." ";
			}

			return $result;
		}


		public function bkc_dec($string){
			$res = "";
			foreach(explode(" ",$string) as $get){
				if(strlen($get) <= 0){
					continue;
				}
				$res .= $this->loadCompiler()["to_string"][$get];
			}

			return base64_decode($res);
		}



		//Load compiler
		function loadCompiler(){
			$compile["to_numb"] = array("A"=>"2"

				//ALPHABET
				,"B"=>"22"
				,"C"=>"222"
				,"D"=>"3"
				,"E"=>"33"
				,"F"=>"333"
				,"G"=>"4"
				,"H"=>"44",
				"I"=>"444",
				"J"=>"5",
				"K"=>"55",
				"L"=>"555",
				"M"=>"6",
				"N"=>"66",
				"O"=>"666",
				"P"=>"7",
				"Q"=>"77",
				"R"=>"777",
				"S"=>"7777",
				"T"=>"8",
				"U"=>"88",
				"V"=>"888",
				"W"=>"9",
				"X"=>"99",
				"Y"=>"999",
				"Z"=>"9999"

				,"a"=>"/2"
				,"b"=>"/22"
				,"c"=>"/222"
				,"d"=>"/3"
				,"e"=>"/33"
				,"f"=>"/333"
				,"g"=>"/4"
				,"h"=>"/44"
				,"i"=>"/444"
				,"j"=>"/5"
				,"k"=>"/55"
				,"l"=>"/555"
				,"m"=>"/6"
				,"n"=>"/66"
				,"o"=>"/666"
				,"p"=>"/7"
				,"q"=>"/77"
				,"r"=>"/777"
				,"s"=>"/7777"
				,"t"=>"/8"
				,"u"=>"/88"
				,"v"=>"/888"
				,"w"=>"/9"
				,"x"=>"/99"
				,"y"=>"/999"
				,"z"=>"/9999"
				," "=>"0"

				////NUMERIC
				,"0"=>"<-=>"
				,"1"=>"<=>"
				,"2"=>"<==>"
				,"3"=>"<===>"
				,"4"=>"<====>"
				,"5"=>"<=====>"
				,"6"=>"<======>"
				,"7"=>"<=======>"
				,"8"=>"<========>"
				,"9"=>"<=========>"

				////SYMBOLIC
				,"."=>"{.}"
				,","=>"{,}"
				,":"=>"{:}"
				,";"=>"{;}"
				,"'"=>"{'}"
				,'"'=>'{"}'
				,"`"=>"{`}"
				,"/"=>"{/}"
				,"_"=>"{_}"
				,"!"=>"{!}"
				,"?"=>"{?}"
				,"("=>"{(}"
				,")"=>"{)}"
				,"{"=>"({)"
				,"}"=>"(})"
				,"<"=>"{<}"
				,">"=>"{>}"
				,"@"=>"{@}"
				,"#"=>"{#}"
				,"$"=>"{($)}"
				,"%"=>"{%}"
				,"^"=>"{^}"
				,"&"=>"{&}"
				,"*"=>"{*}"
				,"="=>"{=}"
				,"-"=>"{-}"
				,"["=>"{[}"
				,"]"=>"{]}"
				,"|"=>"{|}"
				,"+"=>"{+}"
				,"~"=>"{~}");

			$compile["to_string"] = array("2"=>"A"
				,"22"=>"B"
				,"222"=>"C"
				,"3"=>"D"
				,"33"=>"E"
				,"333"=>"F"
				,"4"=>"G"
				,"44"=>"H"
				,"444"=>"I"
				,"5"=>"J"
				,"55"=>"K"
				,"555"=>"L"
				,"6"=>"M"
				,"66"=>"N"
				,"666"=>"O"
				,"7"=>"P"
				,"77"=>"Q"
				,"777"=>"R"
				,"7777"=>"S"
				,"8"=>"T"
				,"88"=>"U"
				,"888"=>"V"
				,"9"=>"W"
				,"99"=>"X"
				,"999"=>"Y"
				,"9999"=>"Z"


				,"/2"=>"a"
				,"/22"=>"b"
				,"/222"=>"c"
				,"/3"=>"d"
				,"/33"=>"e"
				,"/333"=>"f"
				,"/4"=>"g"
				,"/44"=>"h"
				,"/444"=>"i"
				,"/5"=>"j"
				,"/55"=>"k"
				,"/555"=>"l"
				,"/6"=>"m"
				,"/66"=>"n"
				,"/666"=>"o"
				,"/7"=>"p"
				,"/77"=>"q"
				,"/777"=>"r"
				,"/7777"=>"s"
				,"/8"=>"t"
				,"/88"=>"u"
				,"/888"=>"v"
				,"/9"=>"w"
				,"/99"=>"x"
				,"/999"=>"y"
				,"/9999"=>"z"
				,"0"=>" "
				,"{.}"=>"."
				,"{,}"=>","
				,"{:}"=>":"
				,"{;}"=>";"
				,"{'}"=>"'"
				,'{"}'=>'"'
				,"{`}"=>"`"
				,"{/}"=>"/"
				,"{_}"=>"_"
				,"{!}"=>"!"
				,"{(}"=>"("
				,"{)}"=>")"
				,"({)"=>"{"
				,"(})"=>"}"
				,"{<}"=>"<"
				,"{>}"=>">"
				,"{@}"=>"@"
				,"{#}"=>"#"
				,"{($)}"=>"$"
				,"{^}"=>"^"
				,"{%}"=>"%"
				,"{&}"=>"&"
				,"{*}"=>"*"
				,"{=}"=>"="
				,"{[}"=>"["
				,"{]}"=>"]"
				,"{-}"=>"-"
				,"{|}"=>"|"
				,"{+}"=>"+"
				,"{~}"=>"~"

				//DODEMO III
				,"\n<-=>"=>"0"
				,"<-=>"=>"0"
				,"<=>"=>"1"
				,"<==>"=>"2"
				,"<===>"=>"3"
				,"<====>"=>"4"
				,"<=====>"=>"5"
				,"<======>"=>"6"
				,"<=======>"=>"7"
				,"<========>"=>"8"
				,"<=========>"=>"9"
				);

			

			return $compile;
		}

	}

?>