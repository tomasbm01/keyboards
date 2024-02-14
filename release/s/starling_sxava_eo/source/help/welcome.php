<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	$pagename	= 'Starlingŝava klavarfasono';
	$pagetitle	= $pagename;
	
	$pagestyle = <<<END
		/* styles*/
			@font-face {
				font-family: 'ESL Gothic Unicode';
				font-family: 'Inter Alia';
				src: url(fontoj/esl_gothic_unicode-1.ttf), format('truetype');
				/*url('fonts/ESL Gothic Unicode-regular.woff2') format('woff2'),
					url('fonts/ESL Gothic Unicode-regular.woff') format('woff');*/
				font-style: normal;
				font-weight: 500;
			}

			/* * {
				font: 10pt Tahoma;
				text-align: justify;
			}*/

			/*Teksto*/

				html {
					scroll-behavior: smooth;
				}
			
				br {
					line-height: 0.005%;
				}
			
				.brcomplete {
					line-height: 100% !important;
				}
			
				p {
					font: 10.3pt Tahoma, Geneva, Verdana, sans-serif, sans-serif;;
					text-align: justify;
				}
			
				.sciante_frazo {
					color:green;
					font-weight: bold;
				}
			
			/* Strukturo*/
				#tuto {
					display: flex;
					flex-direction: row;
					align-items: center;
					justify-content: flex-end;
					align-items: flex-start;
				}
			
				#grandeco {
					/*padding: 10px;*/
					padding: 10px 10px 0px 10px;
					border-style: solid;
					border-color: #3e970e;
					border-width: 4px 1px 5px 1px;
					border-radius: 6px;
					background: #ffffff;
					/*width: 100%;*/
					overflow-x: auto;
				}
			
				#sag_kvadrato , #ret_kvadrato {
					padding: 10px;
					border-width: 1px 1px 1px 1px;
					border-radius: 6px;
					background: #ffffff;	
				}
			
				#sag_kvadrato img {
					display: block;
					margin-right: auto;
					margin-left: auto;
					max-width: 700px;
					max-height: 327px;
					width: 100%;
					height: auto;
					border-radius: 6px;
				}
			
				#ret_kvadrato img {
					display: block;
					margin-right: auto;
					margin-left: auto;
					max-width: 556px;
					max-height: 260px;
					width: 100%;
					height: auto;
					border-radius: 6px;
				}
			
				aside {
					padding: 6px 70px 10px 30px;
					border-style: solid;
					border-color: #3e970e;
					border-width: 4px 1px 1px 1px;
					border-radius: 6px;
					background: #3e970efa;
					  /*width: 15%;*/
					position: fixed;
					height: auto;
					right: 8px;
					z-index: 2;
				}
			
				aside * {
					color: #FFF;
				}
			
				#nav_indekso_tit {
					font: 13pt Tahoma, Geneva, Verdana, sans-serif, sans-serif;;
					text-align: center;
					margin-left: auto;
					margin-right: auto;
					font-weight: bold;
					/*padding-left: 10px;*/
				}
			
				ul , ol {
					font-size: 10.3pt;
					font-family: Tahoma, Geneva, Verdana, sans-serif, sans-serif;;
					text-align: justify;
				}
			
				ul.horizontala {
					display: flex;
					margin-top: 3px;
					margin-bottom: 0px;
					list-style-type: none;
					overflow: hidden;
					flex-direction: row;
					align-items: center;
					padding: 0 0px;
					margin: auto;
				}
			
				ul.horizontala li {
					float: left;
					padding: 0 6px;
					line-height: normal;
				}
			
				ul.horizontala_amb {
					display: flex;
					margin-top: 3px;
					margin-bottom: 0px;
					list-style-type: none;
					overflow: hidden;
					flex-direction: row;
					align-items: center;
					padding: 0 0px;
					justify-content: space-between;
				}
			
				ul.horizontala p {
					margin-left:1% !important;
				}
			
				#finalo {
					margin-bottom: 0% !important;
					background:#3e970e;
					border-style: solid;
					border-color: #3e970e;
					border-width: 4px 1px 5px 1px;
					border-radius:6px 6px 0px 0px;
				}
			
				#saluton {
					display:flex;
					margin-bottom: 0px;
					color:#fff;
					font-weight: bold;
					align-items: center;
					justify-content: center;
					flex-direction: row;
					flex-wrap: wrap;
				}
			
				#saluton li {
					display: flex;
					margin-top: 3px;
					margin-right: 10px;
					margin-bottom: 0px;
					list-style-type: none;
					flex-direction: row;
					align-items: center;
					margin-left: 10px;
					margin-right: 10px;
				}
			
				#saluton p {
					text-align: left;
					white-space: nowrap;
					font-weight: bold;
					margin: auto;
				}
			
				.flago {
					width: 25px;
					height: auto;
					padding-top: 2px;
				}
			
				hr {
					width: 40%;
					border-color:#87d45eab;
				}
			
				h1 , h2 , h3 , h4 {
					font-family: Tahoma, Geneva, Verdana, sans-serif, sans-serif;;
					font-style: bold;
					margin-top: 4px;
					margin-bottom: 8px;
					color: #3e970e;
					text-align: left;
				}
			
				h1 {
					font-size: 20pt;
				}
			
				h2 {
					font-size: 17pt;
					text-decoration: underline double;
					margin-left:10px
				}
			
				h3 {
					font-size: 15pt;
					margin-left:20px
				}
			
				#vidklavaro {
					max-width: 1300px;
					display: block;
					margin: auto;
				}
			
				.modal {
					display: none;
					position: fixed;
					z-index: 1;
					left: 0;
					top: 0;
					width: 100%;
					height: 100%;
					overflow: auto;
					background-color: rgb(0, 0, 0);
					background-color: rgba(0, 0, 0, 0.4);
				}
			
				.modal-content {
					background-color: #fefefe;
					margin: 5% auto;
					padding: 10px;
					border: 1px solid #888;
					width: 90%;
				}
			
				.modal-content span {
					white-space:normal !important;
				}
			
				.modal_white {
					display: none;
					position: fixed;
					z-index: 3;
					left: 0;
					top: 0;
					width: 100%;
					height: 100%;
					overflow: auto;
					background-color: rgb(0, 0, 0);
					background-color: rgba(0, 0, 0, 0.4);
				}
			
			
				.malferm_div {
					color: rgb(145, 42, 42);
					display: flex;
					align-items: flex-start;
					margin-top: -50px;
					/* padding-right: 0.3em; */
				}
			
				.malferm_img {
					height: auto;
					width: 14px;
				}
			
				.noto {
					background-color: rgb(233, 233, 233);
					border-radius: 6px;
					padding-right: 10px;
					padding-left: 10px;
					padding-top: 5px;
					padding-bottom: 5px;
					position: center;
				}
			
				.noto p {
					color: rgb(104, 104, 104);
					font-style: italic;
					font: 9.7pt Tahoma, Geneva, Verdana, sans-serif, sans-serif;;
				}
			
				.n_grisa {
					color: rgb(104, 104, 104);
					font-size: 8.5pt;
				}
			
				.blua {
					background-color: #90adca;
					/*margin-left: 4px;*/
				}
			
				.blua p {
					color: #ffffff;
				}
			
				.blank {
					width: 70%;
					height: 30px;
				}
			
				.blank2 {
					width: 60%;
					height: 15px;
				}
			
				#form {
					padding: 2px 12px;
				}
			
				.ekdem {
					color: #417e1f;
				}
			
				#butonoj {
					text-align: right;
				}
			
				a:link {
					color: #2561af;
				}
			
				.link_indekso:link {
					color: white;
				}
			
				.link_indekso:visited {
					color: white;
				}
			
				.link_indekso:hover {
					color: rgb(224, 224, 224);
				}
			
				.link_indekso:active {
					color: rgb(206, 206, 206);
				}
			
			/*Klavoj kaj tekstoj*/
				span {
					white-space: pre;
				}
			
				.IPA {
					font-family: 'Times New Roman', Times, serif !important;
					font-size: 1em;
				}
			
				.klav {
					background-color: #f5f2f0;
					color: #000;
					border: 1px solid #d0d2d6;
					border-radius: 5px;
					padding: 1px 5px;
					font-family: ui-monospace,
						Menlo, Monaco, Consolas,
						"Cascadia Mono", "Segoe UI Mono";
					font-size: calc(1em * 0.870);
					font-weight: 700 !important;
					font-style: normal;
				}
			
				.ŝava , .ŝava_ĉeftitolo {
					font-family: 'Inter Alia', 'ESL Gothic Unicode' !important;
				}
			
				.ŝava_ĉeftitolo {
					font-size: 80%;
					white-space: normal;
				}
			
				.windows {
					font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
					background-color: #b2daf8;
					font-style: normal;
					font-weight: 600;
				}
			
				.linux {
					font-family: 'Times New Roman', Times, serif;
					background-color: #ecdda4;
				}
			
				.apple {
					font-family: 'Trebuchet MS', sans-serif;
					background-color: rgb(245, 245, 245);
					font-style: normal;
				}
			
				.android {
					background-color: #c1fadb;
					font-family: Android Euclid,Roboto,Helvetica,Arial,sans-serif;
				}
			
				.simbolo {
					color: green;
					font-weight: 600;
				}
			
				.shift {
					color: #48aec0;
				}
			
				.RALT {
					color: #7a1fc5;
				}
			
				.ctrl {
					color:rgb(3, 3, 216);
				}
			
				.helm {
					font-family: Arial, Helvetica, sans-serif;
					font-size: 1.4em !important;
					font-weight: normal;
				}
			
				.plus {
					color: #999;
					font-weight: 400;
				}
			
				ol {
					font: 10pt Tahoma, Geneva, Verdana, sans-serif, sans-serif;;
				}
			
				.nebold {
					font-weight: normal;
				}
			
				.neitalic {
					font-style: normal;
				}
			
				.not {
					color: red;
					font-weight: bold;
				}
			
				.yes {
					color:green;
					font-weight: bold;
				}
			
				.yesno {
					color:orange;
					font-weight: bold;
				}
			
				.text_min {
					color:rgb(90, 89, 89);
					font-size: 0.7em;
					text-align: center;
				}
			
				.info_icon {
					position: relative;
					top: -0.4em;
					font-size: 80%;
					font-family: ui-monospace,
						Menlo, Monaco, Consolas,
						"Cascadia Mono", "Segoe UI Mono" !important;
					color: #2561af;
					font-style: italic;
				}
			
				.info_png {
					height: 25px;
					width: auto;
				}
			
				abbr {
					cursor: help;
					text-decoration-line: underline;
					text-decoration-color:  green;
					text-decoration-style: dotted;
				}
			
				.defaŭlte {
					position: relative;
					top: -0.4em;
					font-size: 80%;
					font-family: ui-monospace,
						Menlo, Monaco, Consolas,
						"Cascadia Mono", "Segoe UI Mono" !important;
					color: #417e1f;
					font-style: italic;
				}
			
				.orange {
					background-color: rgb(255, 192, 74);
				}
			
				.tabelo_alf {
					font-size: 105%;
				}
			
			/*Butonoj*/
				#burgero_div {
					padding-left: 16px;
					padding-top: 8px;
					padding-bottom: 10px;
					border-style: solid;
					border-color: #36800e;
					border-width: 1px 1px 1px 1px;
					border-radius: 6px;
					background: #3e970efa;
					z-index: 2;
					text-align: left;
					position: fixed;
					right: 20px;
				}
			
				.burgero {
					color: white;
					font-size: 1.3em;
					font-weight: 700;
					cursor: pointer;
					margin-right: 20px;
				}
			
				.close {
					color: #aaa;
					float: right;
					font-size: 28px;
					font-weight: bold;
				}
			
				.close:hover, .close:focus {
					color: black;
					text-decoration: none;
					cursor: pointer;
				}
			
				.close_verda {
					color: #FFF;
					float: right;
					font-size: 1.5em;
					font-weight: bold;
					text-align: right;
				}
			
				.close_verda:hover, .close_verda:focus {
					color: rgb(206, 202, 202);
					text-decoration: none;
					cursor: pointer;
				}
			
				.butono_verda {
					display: inline-block;
					border-radius: 5px;
					background-color: #53c217;
					border: 1px solid green;
					margin-left: 10px;
					color: #FFF;
					text-align: center;
					padding: 8px 10px;
					width: 200px;
					transition: all 0.5s;
					cursor: pointer;
					margin: 5px;
				}
			
				.butono_verda span {
					cursor: pointer;
					display: inline-block;
					position: relative;
					transition: 0.5s;
				  }
			  
				.butono_verda span:after {
				
					position: absolute;
					opacity: 0;
					top: 0;
					right: -30px;
					transition: 0.5s;
					font-style: italic;
				
				  }
			  
				.butono_verda:hover span {
					padding-right: 30px;
				}
			
				.butono_verda:hover {
					background-color: #2fa033;
				}
			
				.butono_verda:hover span:after {
					opacity: 1;
					right: 0;
				  }
			  
				.butono_elektita {
					background-color: #417e1f;
				}
			
				.butono_maleblita , .butono_maleblita span{
					opacity: 0.6;
					cursor: not-allowed;
				}
			
			
				#butono {
					content: '▤';
				}
			
				#butono_sag_sxa span:after {
					content: '𐑖𐑨𐑝𐑨';
					font-family: 'Inter Alia', 'ESL Gothic Unicode';
				}
			
				#butono_sag_latmin span:after {
					content: 'abc';
				}
			
				#butono_sag_latmaj span:after {
					content: 'ABC';
				}
			
				#butono_sag_gremin span:after {
					content: 'αβψ';
				}
			
				#butono_sag_gremaj span:after {
					content: 'ΑΒΨ';
				}
			
				#butono_sag_simbo1 span:after {
					content: '123';
				}
			
				#butono_sag_simbo2 span:after {
					content: '~¿¡';
				}

				#butono_22 span:after {
					content: '⊞';
				}
			
				#butono_33 span:after {
					content: '▦';
				}
			
				#butono_22_sxa span:after {
					content: '⧉';
				}
			
				#butono_22_lat span:after {
					content: '⊞';
				}
			
				#butono_ret_sxa span:after {
					content: '𐑨𐑚𐑔';
					font-family: 'Inter Alia', 'ESL Gothic Unicode';
				}
			
				#butono_ret_sxaalt span:after {
					content: '𐑲𐑱𐑰';
					font-family: 'Inter Alia', 'ESL Gothic Unicode';
				}
			
				#butono_ret_latmin span:after {
					content: 'abc';
				}
			
				#butono_ret_latmaj span:after {
					content: 'ABC';
				}
			
				#butono_ret_latminalt span:after {
					content: 'qwy';
				}
			
				#butono_ret_latmajalt span:after {
					content: 'QWY';
				}
			
			/*Tabeloj*/
				table {
					border-collapse: separate;
					border-spacing: 0;
					position:center;
					margin: 0 auto;
					text-align: center;
				}
			
				th {
					border-color:#1b3f07;
					background-color: #3e970e;
					border-style:solid solid none none;
					border-width:1px;
					font-family:Tahoma, Geneva, Verdana, sans-serif, sans-serif;
					font-size:10pt;
					color: white;
					font-weight:bold;
					overflow:auto;
					padding:13px 8px;
					word-break:normal;
					vertical-align: middle;
					/*position: -webkit-sticky;
					  position: sticky;
					top: 0;*/
				}
			
				td {
					border-color:black;
					background-color: white;
					border-style:none solid solid none;
					border-width:1px;
					font-family:Tahoma, Geneva, Verdana, sans-serif, sans-serif;
					font-size:10pt;
					overflow:auto;
					padding:13px 8px;
					word-break:normal;
					vertical-align: middle;
				}
			
				table tr:last-child th {
					border-bottom-style: solid;
				}
			
				table tr th:first-child {
					border-left-style: solid;
				}
			
				table tr td:first-child {
					border-left-style: solid;
				}
			
				tr:first-child th:first-child {
					border-top-left-radius: 6px;
				}
			
				tr:first-child th:last-child {
					border-top-right-radius: 6px;
				}
			
				tr:last-child td:first-child {
					border-bottom-left-radius: 6px;
				}
			
				tr:last-child td:last-child {
					border-bottom-right-radius: 6px;
				}
			
				.div_interaga {
					border: 1px dashed #1b3f07;
					border-radius: 6px;
					justify-content: center;
				}
			
			
			
			@media (min-width: 900px) {
				#grandeco p {
					margin-left: 20%;
					margin-right: 20%;
				}
			
				ul , ol {
					margin-left: 20%;
					margin-right: 20%;
				}
			
				.noto {
					margin-left: 20%;
					margin-right: 20%;
				}
			
				.noto p {
					margin-left: 5% !important;
					margin-right: 5% !important;
				}
			
				.n_grisa {
					margin-left: 25% !important;
					margin-right: 25% !important;
				}
			
				ul.horizontala_depen {
					display: flex;
					margin-top: 3px;
					margin-bottom: 0px;
					list-style-type: none;
					overflow: hidden;
					flex-direction: row;
					justify-content: center;
					align-items: center;
					padding: 0 0px;
					margin: auto;
				}

				ul.horizontala_depen li {
					float: left;
					padding: 0 6px;
					line-height: normal;
				}
			
				ul.horizontala_depen p {
					float: left;
					padding: 0 6px;
					line-height: normal;
					margin:auto !important;
				}

			}


			@media (min-width: 900px) {
				#finalo {
					margin-left:15%;
					margin-right:15%;
				}
			}


			@media (max-width: 900px) {
				#grandeco p {
					margin-left: 5%;
					margin-right: 5%;
				}
			
				ul , ol {
					margin-left: 5%;
					margin-right: 5%;
				}
			
				.noto {
					margin-left: 5%;
					margin-right: 5%;
				}
			
				.noto p {
					margin-left: 2% !important;
					margin-right: 2% !important;
				}
			
				.n_grisa {
					margin-left: 8% !important;
					margin-right: 8% !important;
				}
			
			
				ul.horizontala_depen {
					margin-right: auto;
					margin-left: auto;
					padding: 0px;
					justify-content: center;
					align-items: center;
				}
			
				.nurpc {
					display: none;
				}
			
				#finalo {
					margin-left:5%;
					margin-right:5%;
				}
			}

			@media (max-width: 950px) {
				#horizontala_reta_1 {
					display:flex;
					flex-direction: row;
					flex-wrap: wrap;
					align-items: center;
					align-content: center;
					justify-content: center;
					padding: 0%;
					margin: auto;
				}
			
				.horizontala_reta_2 {
					display:flex;
					flex-direction: column;
					flex-wrap: wrap;
					align-content: center;
					align-items: center;
					justify-content: center;
					padding: 0%;
					margin-left:2px !important;
					margin-right:2px !important;
				}
			
				#horizontala_sag_1 {
					display:flex;
					flex-direction: column;
					flex-wrap: wrap;
					align-items: center;
					align-content: center;
					justify-content: center;
					padding: 0%;
					margin: 0px;
				}
			
				.horizontala_sag_2 {
					display:flex;
					flex-direction: column;
					flex-wrap: wrap;
					align-content: center;
					align-items: center;
					justify-content: center;
					padding: 0%;
					margin-left:0px !important;
					margin-right:0px !important;
				}
			
				.horizontala_sag_3 {
					display:flex;
					flex-direction: column;
					flex-wrap: wrap;
					align-content: center;
					align-items: center;
					justify-content: center;
					padding: 0%;
					margin-left:2px !important;
					margin-right:2px !important;
				}
			
				.horizontala_sag_4 {
					display:flex;
					flex-direction: row;
					flex-wrap: wrap;
					align-content: center;
					align-items: center;
					justify-content: center;
					padding: 0%;
					margin-left:0px;
					margin-right:0px;
				}
			
				#butono_sag_sxa {
					display: inline-block;
					margin: 0px;
					margin-bottom: 5px;
					padding: 8px 10px;
					width: 418px;
				}
			}

			@media (max-width: 504px) {
			
				#butono_sag_sxa {
					width: 200px;
				}
			}

			@media (min-width: 950px) {
				#horizontala_reta_1 {
					display:flex;
					flex-direction: row;
					flex-wrap: wrap;
					align-items: center;
					align-content: center;
					justify-content: center;
					padding: 0%;
					margin: auto;
				}
			
				.horizontala_reta_2  {
					display:flex;
					flex-direction: row;
					flex-wrap: nowrap;
					align-content: center;
					align-items: center;
					justify-content: center;
					padding: 0%;
					margin-left:10px !important;
					margin-right:10px !important;
				}
			
				#horizontala_sag_1 {
					display:flex;
					flex-direction: row;
					flex-wrap: wrap;
					align-items: center;
					align-content: center;
					justify-content: center;
					padding: 0%;
					margin: auto;
				}
			
				.horizontala_sag_2 , .horizontala_sag_3 {
					display:flex;
					flex-direction: row;
					flex-wrap: nowrap;
					align-content: center;
					align-items: center;
					justify-content: center;
					padding: 0%;
					margin-left:10px !important;
					margin-right:10px !important;
				}
			
				.horizontala_sag_4 {
					display:flex;
					flex-direction: column;
					flex-wrap: nowrap;
					align-content: center;
					align-items: center;
					justify-content: center;
					padding: 0%;
					margin-left:0px !important;
					margin-right:10px !important;
				}
			
				#butono_sag_sxa {
					display: inline-block;
					margin: 0px;
					padding: 8px 10px;
					width: 200px;
					height: 76px;
				}
			}

			@media (min-width: 1400px) {
				#horizontala_reta_1 {
					display: block;
				}
			
				.horizontala_reta_2 {
					display:flex;
					flex-direction: row;
					flex-wrap: nowrap;
					align-content: center;
					align-items: center;
					justify-content: center;
					padding: 0%;
					margin: auto;
				}

			}

		/* Tabeloj*/
			.tg-wrap {
				margin-left: auto;
				margin-right: auto;
			}

			.tg .tabelo_ŝav {
				background-color:#000000;
				border-color:#000000;
				color:white;
				font-weight:bold;
			}

			.tg .tabelo_lat {
				background-color:#53b35f;
				border-color:#000000;
			}

			.tg .tabelo_gre {
				background-color:#d7925a;
				border-color:#000000;
				color:#000000;
			}

			.tg .tg-shift {
				background-color:#6cc7cc;
				border-color:#000000;
				color:#000000;
				font-weight:bold;
			}

			.tg .tg-altgr {
				background-color:#da5d87;
				border-color:#000000;
				color:#000000;
				font-weight:bold;
			}

			@media screen and (max-width: 1400px) {
				.tg {
					width: auto !important;
				}

				.tg col {
					width: auto !important;
				}
				.tg-wrap {
					overflow-x: auto;
					-webkit-overflow-scrolling: touch;
				}
			}
		
		/* SVG*/
			#background_color {
				fill: #000;
				stroke: #ddd;
			}
		
			.keycap .border {
				stroke: black;
				stroke-width: 2;
			}
			
			.outer {
				fill: #cccccc;
			}
			
			.inner {
				fill: #fcfcfc;
			}
			
			.keycap .inner.border {
				stroke: rgba(0,0,0,.1);
			}
			
			.figuroj_group_33 , .figuroj_group_22 , .figuroj_group_11 { 
				display:none !important;
			}
			
			.Figuroj_33 , .Figuroj_22 , .Figuroj_11 { 
				display: inline;
				fill: #959583;
				fill-opacity: 1;
			}
			
			.Figuroj_22 {
				display: inline;
				fill:#959583;
				stroke-width: 1.36462;
				display: inline;
			}
			
			.skr-sign {
				font-family: 'Inter Alia';
				text-align: center;
				text-anchor: middle;
				display: inline;
				opacity: 1;
				fill-opacity: 1;
				-inkscape-font-specification: 'Inter Alia';
				font-style: normal;
				font-variant: normal;
				font-weight: normal;
				font-stretch: normal;
				stroke-width: 1.029;
			}
			
			.s11_sx {
				font-size: 18pt;
			}
			
			.s11_al , .s22 {
				font-size:12pt;
			}
			
			.s33 {
				font-size:10pt;
			}
			
			.lat {
				fill: #478e50;
			}
			
			.lat_may, .shift {
				fill: #6cd1e2;
			}
			
			.gr {
				fill: #ff7f2a;
			}
			
			.sxa, .RE_sxa {
				fill: #000000;	
				font-weight: 5em;
			}
			
			.aliaj , .altgr {
				fill: #da5d87;
				font-size: 10pt;
			}
			
			.K_CAPSLock_Out {
				fill: #00773a;
			}
			
			.K_CAPSLock_In {
				fill: #2b8f4f;
			}
			
			.Key_SHIFT_Out {
				fill: #00a4a9;
			}
			
			.Key_SHIFT_In {
				fill: #46c7cc;
			}
			
			.Key_RALT_Out {
				fill:#cb3d6e;
			}
			
			.Key_RALT_In {
				fill:#ea5a87;
			}
			
			.T_Shift, .T_Ctrl, .T_RAlt, #T_LAlt, #T_CAPSLock {
				font-size:8pt;
			}
			
			.T_Win, #T_Menu, #T_Tab {
				font-size: 24px;
			}
			
			.Key_Greka_Out {
				fill:#c3bfae;
			}
			
			.Key_Greka_In {
				fill:#f0ecda;
			}
			
			#Key_Greka_text {
				font-size:7pt;
				fill:#514f44;
			}

	END;

	require_once('header.php');
?>
	<body onload="vidklavaro_e(); montri_33()">
		<div id="tuto">
			<aside id="right_bar" style="display:none">
				<nav>
					<ul class="horizontala_amb">
						<p id="nav_indekso_tit">Indekso</p>
						<p class="close_verda" id="nav_indekso_close" onclick="malmontri_navindekso()">&times;</p>
					</ul>
					<ol type="I" style="text-align: left; margin-left:3%; margin-right:3%; white-space: nowrap;">
						<li><a href="#enkonduko" class="link_indekso">Enkonduko</a></li>
						<ol type="1" style="text-align: left; margin-left:1%; margin-right:1%;">
							<li><a href="#historio" class="link_indekso">La historio</a></li>
							<li><a href="#alfabeto" class="link_indekso">Sciante la alfabeton</a></li>
						</ol>
						<li><a href="#klavaro" class="link_indekso">Uzante la starlingŝavan klavarfasonon</a></li>
						<ol type="1" style="text-align: left; margin-left:1%; margin-right:1%;">
							<li><a href="#komver" class="link_indekso">Komputila versio</a></li>
							<ol type="a" style="text-align: left; margin-left:1%; margin-right:1%;">
								<li><a href="#tavoloj" class="link_indekso">Klavartavoloj</a></li>
								<li><a href="#agordebleco" class="link_indekso">Adaptableco kaj agordebleco</a></li>
							</ol>
							<li><a href="#saĝver" class="link_indekso">Saĝtelefona versio</a></li>
							<ol type="a" style="text-align: left; margin-left:1%; margin-right:1%;">
								<li><a href="#saĝ_tavoloj" class="link_indekso">Klavartavoloj</a></li>
								<li><a href="#saĝ_daŭr" class="link_indekso">Daŭra premado</a></li>
							</ol>
							<li><a href="#retver" class="link_indekso">Reta versio</a></li>
						</ol>
					</ol>
				</nav>
			</aside>
			<div id="grandeco">
				<header class="header">
					<div id="burgero_div">
						<span class="burgero" onclick="montri_navindekso()">☰</span>
					</div>
					<ul class="horizontala">
						<li><img class="flago" id="espflagohead" src="flago.png" alt="Esperanta flago"></li>
						<li><h1>La starlingŝava klavarfasono <br><span class="ŝava_ĉeftitolo">(𐑤𐑨 𐑕𐑑𐑨𐑮𐑤𐑦𐑵𐑜𐑖𐑨𐑝𐑨 𐑒𐑤𐑨𐑝𐑨𐑮𐑓𐑨𐑕𐑩𐑵𐑩)</span></h1></li>
					</ul>
				</header>
				<p></p>
				<div id="eraro_sag" style="display:none">
					<div class="noto" style="background-color: rgb(199, 120, 120);">
						<ul class="horizontala">
							<li><img class="info_png" src="cancel.png" alt="error_logo"></li>
							<li>
								<p style="color: white;"><i>Eble Keyman duoble instalos la klavaron en via saĝtelefono aŭ tabulkomputilo; la saĝtelefonan kaj la komputilan version (kompreneble la lasta tute ne funckios per via saĝtelefono). Bonvolu, se ĝi okazas, malinstalu la komputilan version (nomita kiel Starlingŝava Esperanto) en la agordoj de Keyman kaj nur lasu la klavaron nomita kiel "Starlingŝava Esperanto (Telefona)"̇. Ne scias mi kial okazas tiu ĉi eraro, pardonu.</i>
									<br/>
								</p>
							</li>
						</ul>
					</div>
					<p></p>
				</div>
				<div class="noto blua" style="padding-bottom: 13px;">
					<ul class="horizontala">
						<div>
							<li><img src="info.png" alt="noto" height="30px" weight="auto"></li>
						</div>
						<div>
							<p>
								<i>Vi povas aliri ĉi tiun dokumenton iam ajn per la Keymanaj agordoj:</i><br>
							</p>
							<p>
								<ul style="margin-right: 0%; margin-left: 0%; list-style-position: outside; list-style-type:disc;">
									<li style="color: white; margin-left:-2%; text-align:left; font-size: 9.7pt; padding:0px"><i><b>Saĝtelefone</b>: agordoj > "instalitaj lingvoj" > "Esperanto (Ŝava)" > "Ŝava Esperanto (Saĝtelefono)" > "Helpligilo".</i></li>
									<br>
									<li style="color: white; margin-left:-2%; text-align:left; font-size: 9.7pt; padding:0px"><i><b>Komputile</b>: dekstre alklaku la ikonon de Keyman > "Agordoj" > "Helpo". Aldone ĝi troviĝas kiel "Helpo de la klavaro" viaoperaciume.</i></li>
								</ul>
							</p>
						</div>
					</ul>
				</div>
				<section name="sec_enkonduko" id="sec_enkonduko">
					<div class="blank"></div>
					<h1 id="enkonduko">I.  <i>Enkonduko</i></h1>
					
					<p>Saluton, kara esperanta samideano!</p>
					<p>Tiu ĉi klavarfasono funkcias per la komputilaj kaj saĝtelefonaj versioj de Keyman, estante kongruanta je <span class="klav windows"><img src="win11_logo.png" height="10px" weight="auto"> Vindozo</span>, <span class="klav apple"><img src="apple_logo.png" height="10px" weight="auto"> macOS</span>, <span class="klav linux"><img src="linux_logo.png" height="10px" weight="auto"> Linukso</span>, <span class="klav android"><img src="Android.png" height="10px" weight="auto"> Android</span>, <span class="klav apple"><img src="apple_logo.png" height="10px" weight="auto"> iOS</span> kaj <span class="klav apple"><img src="apple_logo.png" height="10px" weight="auto"> iPadOS</span>. Ĝi estis kreita por faciligi la skribado de esperantajn tekstojn en la malmulte konata [starling]ŝava alfabeto. Serĉante la internaciecon, estis aldonitaj plilongigitajn diakritaĵojn kaj aliajn skribsignojn.</p>
					<p>Mi estas komencanto koncerne la programado kaj mi estis lernanta pri tio dum la kreado de tiu ĉi virtuala klavarfasono. Bonvolu konsideri tion kaj se vi rimarkas eraron aŭ se vi volas novan funkcion, bonvolu diru al mi; mi provos plibonigi ĝin per viaj sugestoj.</p>
					<p>Samkiel Pokrovskij, mi ne proponas ortografian reformon ĉe la Esperantujo. Mi nur volas disvastigi ĉi tiun malmulte konatan alfabeton. Fakte mi konsideras ĝin parto de la esperanta kulturo, kaj tio certe ja igas ĝin koninda de aliaj esperantistoj.</p>
					<p>La uzado de ĉi tiu skribsistemo povas esti kiel scivolemaĵo aŭ intelekta ludo, sed ankaŭ oni povas profiti de ĝi. Eksciis mi ke, uzante ĝin oni povas esprimi pli facile malfacilajn fortajn emociojn, ol uzi vian denaskan alfabeton. Konsiderante ĝian lernfacilecon, kredas mi ke, ĝi povus havi memterapian uzadon. Provu ĝin!</p>
					<p class="text_min"><b>Vi povas uzi la piktogramon ☰ supre dekstre por iri al la sekcio, kiu vin interesas.</b></p>
					<div class="noto flava">
						<ul class="horizontala">
							<li><img class="info_png" src="alert.png" alt="info_logo"></li>
							<li>
								<p><i>Ĉar tiu ĉi alfabeto ne estas multe konata aŭ uzata, multaj aplikaĵoj ne povas bone montri ĝiajn literojn. Pro tio, ĉi tiu klavarfasono inkludas tri tipografiojn (<b>ESL Gothic Unicode</b>, <b>Inter Alia</b> kaj <b>Ormin</b>), kiuj eblas la montrado de ili per retumiloj aŭ kongruaj verkiloj, instalantiĝante aŭte de Keyman komputile. Se la ŝavajn literojn ne montriĝas bone, vi devos instali iun ajn kongruajn tipografiojn el Interreto; jen pluraj tipografioj kongruaj ĉe la retejo <a href="https://www.shavian.info/shavian_fonts/"><span class="ŝava">𐑖𐑱𐑝𐑾𐑯</span></a>.</i></p>
							</li>
						</ul>
					</div>
					
					<div class="blank"></div>
					<hr>
					<div class="blank2"></div>
					<section name="sec_historio" id="sec_historio">
						<h2 id="historio">★ 1.  La historio</h2>
						<p>La verkisto <strong>George Bernard Shaw</strong> (<strong><span class="ŝava">·𐑡𐑹𐑡 ·𐑚𐑻𐑯𐑼𐑛 ·𐑖𐑷</span></strong>, en sia alfabeto) estis kritika koncerne la angla ortografio, konsiderante, ke la ortografio de la angla estas malkonsekvenca rilate al ĝia fonetiko.</p>
						<div class="noto">
							<p class="n_grisa">Tiu malkonsekvenco estas klariganta je la nuna [baza] latina alfabeto enhavas nur 26 literojn, sed la angla havas ĉirkaŭ 40 diversajn fonemojn. Do pro la diferenco inter la fonemoj kaj grafemaj kvantoj, kelkaj literoj aŭ literkombinaĵoj povas esti pronuncitaj diverse depende de la vorto.</p>
							<p class="n_grisa">Ekzemple, angllingve la digrafo "th" povas esti pronuncita kiel /<span class="IPA">θ</span>/ aŭ /<span class="IPA">ð</span>/ depende de la vorto (kiel ene de <i>"think"</i> aŭ <i>"that"</i>, respektive). Alia ezkemplo estas la vorto “<em>read</em>”, kies prononco povas esti /<span class="IPA">ɹiːd</span>/ aŭ /<span class="IPA">ɹɛd</span>/ depende de se ĝi estas substantivo aŭ prezenca verbo, aŭ preterita verbo. Tiaj fenomenoj malfaciligas la lernadon de la lingvo kaj de sia skribado.</p>
						</div>
						<p>Dum junio 1950 en sia testamento, George Shaw kreis fonduson, kiu konservus monon kaj ĝi estus donita kiel premio al kiu solvis ĉi tiun problemon per la kreo de nova alfabeto. Fiksis li tri ĉefajn kriteriojn por la nova alfabeto; devos ekzisti almenaŭ kvardek literoj, ĝi devos esti kiel eble plej fonetika kaj devos esti sufiĉe malsama de la latina alfabeto por esti distingebla de ĝi.</p>					
						<p>Shaw mortis samjare. La fonduso atingis havi pli da £100,000 and ĉi tiu riĉeco pliiĝis laŭlonge de la tempo danke al tantiemo de lia muzikalo My Fair Lady.</p>
						<p>Post tio, monda konkurso estis deklarita por desegni tiun alfabeton. 467 proponoj estis prezentitaj kaj kvar el ili gajnis la konkurson; la venkistoj estis S. L. Pugmire, Pauline M. Barrett, Ronald Kingsley Read kaj J. F. Magrath.</p>
						<p>Neniu el la venkistaj alfabetoj estis sufiĉe bona laŭ la juĝistoj do Peter MacCarthy, kiu devus transliterumi la verkaĵon na <em>Androcles and the Lion</em> al la nova alfabeto, proponis al ili ke la venkistoj faru novan proponotan korektitan alfabeton. La proponaĵo de <strong>Ronald Kingsley Read</strong> (<span class="ŝava"><strong>·𐑮𐑪𐑯𐑩𐑤𐑛 ·𐑒𐑦𐑙𐑟𐑤𐑦 ·𐑮𐑰𐑛</strong></span>, en sia alfabeto) estis la plej bona el ili laŭ la juĝistoj, tial la 18-an de auĝusto 1960 li estis nomumita por kombini la kvar proponojn en ununura alfabeto. Post unu monaton, lia alfabeto estis preta.</p>
						<p>Finfine, danke al Read, la origina ŝava alfabeto naskiĝis, jen "<em><strong><u>the shavian alphabet</u></strong></em>" (<strong class="ŝava"><em>𐑞 𐑖𐑱𐑝𐑾𐑯 𐑨𐑤𐑓𐑩𐑚𐑧𐑑</em></strong>), eldonante MacCarthy dum 1962 na <em>Androcles and the Lion</em> uzante ĝin. Tiu alfabeto enhavas 48 grafemojn; 23 el ili estas puraj longaj aŭ mallongaj vokaloj, diftongaj vokaloj aŭ kombinaĵoj inter vokaloj kaj la fonemo /<span class="IPA">ɹ</span>/, kaj la ceteraj estas konsonantoj. Tio plibonigas la rilaton fonemo-grafemon kaj, se ĝi estus normigita, ĝi eble povus faciligi la lernadon.</p>
						<p>Tiam alvenis la usona esperantisto <strong>Ĝan Ŭesli Starling</strong> (<span class="ŝava"><strong>·𐑡𐑨𐑵 ·𐑘𐑧𐑕𐑤𐑦 ·𐑕𐑑𐑨𐑮𐑤𐑦𐑵𐑜</strong></span> en sia alfabeto, antaŭe John Wesley Starling) al la ŝava historio, kiu dum la jaro 1996 kaj danke al sia amiko Phillip Driscoll (<span class="ŝava">·𐑓𐑦𐑤𐑦𐑐 ·𐑛𐑮𐑦𐑕𐑒𐑩𐑤</span>) eksciis la ekzistadon de la [origina] ŝava alfabeto <i>("the shavian alphabet")</i>. <a href="https://esperanto.us/sxava_alfabeto/">Ili alportis ĝin al Esperanto</a>, konsiderante ke tiu ĉi nova adaptita alfabeto estos logika skribsistemo kaj ĝi estos kiel eble plej fonetika koncerne la Esperanta fonetiko samkiel la origina celo de la origina ŝava alfabeto. Jen la ŝava alfabeto esperantigita; la <strong><u>starlingŝava alfabeto</u></strong> (<strong class="ŝava">𐑤𐑨 𐑕𐑑𐑨𐑮𐑤𐑦𐑵𐑜𐑖𐑨𐑝𐑨 𐑨𐑤𐑓𐑩𐑚𐑧𐑑𐑩</strong>), kiu enhavas nur 28 literojn (kaj 14 oficialajn ligaĵojn).</p>
						<div class="noto">
							<p class="n_grisa">Ĝenerale, oni ne faras distingon inter ambaŭ alfabetoj, nomante ilin ambaŭ simple kiel na “ŝava alfabeto”. Mi vere konsideras, ke tio estas eraro. La origina ŝava alfabeto [<em>“shavian alphabet”</em>] estas malsama ol tiu de Starling; la unua estas granda alfabeto por la angla, kaj la dua nur havas ĉirkaŭ duonon de la originaj karakteroj por skribi Esperante.</p>
							<p class="n_grisa">Tial mi preferas fari distingon inter ili, nomante ilin kiel na “ŝava alfabeto” kaj na “starlingŝava alfabeto”. Certe la dua ja estas ido de la unua, do oni povus taksi ĝin kiel “ŝavido”-n. Aldone, oni povas diri ke ekzistas pli ol unu ŝavido.</p>
						</div>
						<p>Tiujare okazis la kreo de du aliaj ŝavaj alfabetoj por la angla; la "Quikscript" alfabeto kaj la <i>"Revised Shaw alphabet"</i>, sed ili ne estis tiel gravaj kiel la supre menciitaj alfabetoj.</p>
						<ul style="line-height: 1.5">
							<li>
								<p style="margin-left: auto; margin-right: auto;">La alfabeto <b><u>Quikscript</u></b> estis kreita ankaŭ de Read el lia antaŭa kreaĵo por korekti kelkaj erarojn, kiujn li trovis, konsiderante la opinion de ĉirkaŭ 500 de retforumanoj. Ĝi enhavas 40 literojn; 25 el ili estas konsonantoj kaj la cetero estas vokaloj.</p>
								<p style="margin-left: auto; margin-right: auto;">Ĝi eblas la uzon de mallongigoj de plenaj vortoj aŭ de mallongigoj de anglaj sufiksoj. Ekzistas du skribmanieroj je skribi ĉi tiu alfabeto; la Junior Quikscript kaj la Senior Quikscript. La unua estas la baza formo kaj la dua estas la duonkursiva formo.</p>
							</li>
							<li>
								<p style="margin-left: auto; margin-right: auto;"><b><u><em>Revised Shaw Abjad</em></u></b> (<em>Shaw Phonetic Alphabet</em>) estis kreita de Paul Vandenbrink en 1996 (kaj reviziita en 2001) por reprezenti la anglan fonetike, kaj malpliigi la vokalajn variojn pro diferencoj je akĉentoj.</p>
								<p style="margin-left: auto; margin-right: auto;">Ĝi ne estas "reala alfabeto", sed ĝi estas abĝado. Alivorte ĝi estas skribsistemo, kiu ne enhavas vokalojn (aŭ, se ĝi enhavas ilin, ĉi tiuj ĝenerale ne estas gravaj por la skribado). Ĝi enhavas 72 skribsignojn, 59 el ili estas literoj kaj la ceteroj estas vokalaj indikiloj</p>
							</li>
						</ul>
						<p>Poste, la rusa esperantisto-esperantologisto <strong>Sergio Pokrovskij </strong> (<em>Сергей Покровский</em> aŭ <span class="ŝava"><strong>·𐑕𐑧𐑮𐑜𐑦𐑩 ·𐑐𐑨𐑒𐑮𐑩𐑓𐑕𐑒𐑦𐑰</strong></span> en sia alfabeto) faris <a href="https://kovro.heliohost.org/eo/tools/Sxava/sxava.html">tre vastan interesan studaĵon</a> dum la jaro 2011 pri la starlingŝava alfabeto. Pripensante la fonetikon, diftongojn kaj duonvokalojn, li faris plurajn proponaĵojn; anstataŭigante la skribsignon <span class="klav ŝava simbolo">𐑢</span> je <span class="klav ŝava simbolo">𐑰</span>, anstataŭigante la literon <span class="klav ŝava simbolo">𐑘</span> je <span class="klav ŝava simbolo">𐑲</span> kaj <span class="klav ŝava simbolo">𐑱</span>, kaj aldonante la literon <span class="klav ŝava simbolo">𐑞</span> (kies prononco estas /d͡z/).</p>
						<div class="noto">
							<p class="n_grisa">Mi ne scias kiel oni povus nomi ĉi tiun variaĵon de la starlingŝava alfabeto. Ĉu oni diros na "pokrovskijstarlingŝava alfabeto", aŭ na "pokrovskijŝava alfabeto"? Ambaŭ nomoj estas malfacilaj, almenaŭ laŭ mi, sed mi kredas ke iu nomo necesas por distingi ĉi tiujn variaĵojn en kelkaj kuntekstoj. Mi preferas la unuan nomon ĉar mi kredas, ke la dua nomo iel povus forpreni la meriton je la laboro de Starling. Nu, alifklanke ŝajnas ke Pokrovskij nomas ĝin kiel "diftonga alfabeto".</p>
						</div>
					</section>
					<div class="blank"></div>
					<hr>
					<div class="blank2"></div>
					<section name="sec_alfabeto" id="sec_alfabeto">
						<h2 id="alfabeto">★ 2. Sciante la alfabeton</h2>
						<p>La starlingŝava alfabeto estis sistememe dizegnita de Starling el la ŝava alfabeto (<i>"shavian alphabet"</i>), adaptante ĉi tiun anglalingvon alfabeton por la skribado de Esperanto konsiderante fonetikon kaj facillerneblon. Por plia simpleco kaj facillerneblo, ne ekzistas majuskloj ĉi-alfabete, do oni uzas interpunkton <span class="ŝava klav">·</span> antaŭ proprajn substantivojn por marki ilin; ekzemple, esperantlatine oni skribas "Adamo"-n kun majusklo, sed [pokrovskij]starlingŝave oni skribas ĝin kiel "<span class="ŝava">·𐑨𐑛𐑨𐑫𐑩</span>"-n.</p>
						<p>Oni povas kategoriigi ĝiajn literojn en tri grupojn, depende de sia posicio ĉe la bazlinioj je; altajn, mezaltajn kaj profundajn literojn. Aldone, ĉiuj konsonantoj havas turnitan paron (krome la litero <span class="ŝava klav simbolo">𐑔</span>, aŭ <span class="klav">c</span> esperantlatine), laŭ ilia fonetika valoro.</p>
						<p><img src="Sxava_alfabeto.png" style="width: 95%; display: block; margin-right: auto; margin-left: auto;"> </p><br>
						<p>
							<ol>
								<li>
									<p style="margin-left: auto; margin-right: auto;"><b>Altaj literoj:</b> elstaras super la bazlinion kaj la plejparto el ili estas senvoĉaj konsonantoj.</p>
								</li>
							</ol>
							<div class="tg-wrap">
								<table id="Altaj" onmouseover="substreki();" onmouseout="malsubstreki();" style="cursor:pointer">
									<tbody>
										<tr style="font-weight: bold" >
											<td style="border-color: #1b3f07; background-color: #3e970e; color: white; font-weight: bold; border-top-left-radius: 6px;">Starlingŝava</td>
											<td style="border-style: solid solid solid none; border-width: 1px;"><span class="ŝava tabelo_alf"> 𐑐 </span></td>
											<td style="border-style: solid solid solid none; border-width: 1px;"><span class="ŝava tabelo_alf"> 𐑑 </span></td>
											<td style="border-style: solid solid solid none; border-width: 1px;"><span class="ŝava tabelo_alf"> 𐑒 </span></td>
											<td style="border-style: solid solid solid none; border-width: 1px;"><span class="ŝava tabelo_alf"> 𐑓 </span></td>
											<td style="border-style: solid solid solid none; border-width: 1px;"><span class="ŝava tabelo_alf"> 𐑕 </span></td>
											<td style="border-style: solid solid solid none; border-width: 1px;"><span class="ŝava tabelo_alf"> 𐑖 </span></td>
											<td style="border-style: solid solid solid none; border-width: 1px;"><span class="ŝava tabelo_alf"> 𐑗 </span></td>
											<td style="border-style: solid solid solid none; border-width: 1px;"><span class="ŝava tabelo_alf"> 𐑙 </span></td>
											<td style="border-style: solid solid solid none; border-width: 1px;"><span class="ŝava tabelo_alf"> 𐑘 </span></td>
											<td style="border-style: solid solid solid none; border-width: 1px; border-top-right-radius: 6px;"><span class="ŝava tabelo_alf"> 𐑔 </span></td>
										</tr>
										<tr>
											<td style="border-color: #1b3f07; background-color: #3e970e; color: white; font-weight: bold;">Esperantlatina</td>
											<td>p</td>
											<td>t</td>
											<td>k</td>
											<td>f</td>
											<td>s</td>
											<td>ŝ</td>
											<td>ĉ</td>
											<td>ĥ</td>
											<td>ŭ</td>
											<td>c</td>
										</tr>
										<tr>
											<td style="border-color: #1b3f07; background-color: #3e970e; color: white; font-weight: bold;">Sonvaloro<abbr title="La prononco estas montrata per la Internacia Fonetika Alfabeto, IFA (IPA)."><span class="info_icon" style="color: white;">i</span></abbr></td>
											<td>/p/</td>
											<td>/t/</td>
											<td>/k/</td>
											<td>/f/</td>
											<td>/s/</td>
											<td>/ʃ/</td>
											<td>/t͡ʃ/</td>
											<td>/x/</td>
											<td>/w/</td>
											<td>/t͡s/</td>
										 </tr>
									</tbody>
								</table>
							</div>
							<ol start="2">
								<li>
									<p style="margin-left: auto; margin-right: auto;"><b>Profundaj literoj:</b> estas plejparte voĉaj konsonantoj.</p>
								</li>
							</ol>
							<div class="tg-wrap">
								<table id="Profundaj" onmouseover="substreki();" onmouseout="malsubstreki();" style="cursor:pointer">
									<tbody>
										<tr id="profundaj_starling" style="font-weight: bold; border-width: 1px;">
											<td style="border-style: solid solid solid solid; border-color: #1b3f07; background-color: #3e970e; color: white; border-top-left-radius: 6px;">Starlingŝava</td>
											<td style="border-style: solid solid solid none"><span class="ŝava tabelo_alf"> 𐑚 </span></td>
											<td style="border-style: solid solid solid none"><span class="ŝava tabelo_alf"> 𐑛 </span></td>
											<td style="border-style: solid solid solid none"><span class="ŝava tabelo_alf"> 𐑜 </span></td>
											<td style="border-style: solid solid solid none"><span class="ŝava tabelo_alf"> 𐑝 </span></td>
											<td style="border-style: solid solid solid none"><span class="ŝava tabelo_alf"> 𐑟 </span></td>
											<td style="border-style: solid solid solid none"><span class="ŝava tabelo_alf"> 𐑠 </span></td>
											<td style="border-style: solid solid solid none"><span class="ŝava tabelo_alf"> 𐑡 </span></td>
											<td style="border-style: solid solid solid none"><span class="ŝava tabelo_alf"> 𐑣 </span></td>
											<td style="border-style: solid solid solid none"><span class="ŝava tabelo_alf"> 𐑢 </span></td>
											<td style="border-style: solid solid solid none; border-top-right-radius: 6px;"><span class="ŝava">-</span></td>
										</tr>
										<tr>
											<td style="border-color: #1b3f07; background-color: #3e970e; color: white; font-weight: bold;">Esperantlatina</td>
											<td>b</td>
											<td>d</td>
											<td>g</td>
											<td>v</td>
											<td>z</td>
											<td>ĵ</td>
											<td>ĝ</td>
											<td>h</td>
											<td>j</td>
											<td>-</td>
										</tr>
										<tr>
											<td style="border-color: #1b3f07; background-color: #3e970e; color: white; font-weight: bold;">Sonvaloro<abbr title="La prononco estas montrata per la Internacia Fonetika Alfabeto, IFA (IPA)."><span class="info_icon" style="color: white;">i</span></abbr></td>
											<td>/b/</td>
											<td>/d/</td>
											<td>/g/</td>
											<td>/v/</td>
											<td>/z/</td>
											<td>/ʒ/</td>
											<td>/d͡ʒ/</td>
											<td>/h/</td>
											<td>/j/</td>
											<td>/d͡z/</td>
										</tr>
									</tbody>
								</table>
							</div>
							<ol start="3">
								<li>
									<p style="margin-left: auto; margin-right: auto;"><b>Mezaltaj literoj:</b> povas esti vokaloj aŭ sonorantoj. La fonemoj /l/ kaj /ɾ/ (aldone de /j/) estas fluantoj. La fonemoj /m/ kaj /n/ estas nazsonoj.</p>
								</li>	
							</ol>
							<div class="tg-wrap">
								<table id="mezaltaj" onmouseover="substreki();" onmouseout="malsubstreki();" style="cursor:pointer">
									<thead>
										<tr>
											<th rowspan="2" style="border-style:solid solid solid solid">Grupo</th>
											<th colspan="5" rowspan="2" style="border-style:solid solid solid none">Vokaloj</th>
											<th colspan="4">Sonorantoj</th>
										</tr>
										<tr>
											<th colspan="2" style="border-style:solid solid solid none">Fluantoj</th>
											<th colspan="2">Nazaj</th>
										</tr>
									</thead>
									<tbody>
										<tr id="mezaltaj_starling" style="font-weight: bold;">
											<td style="background-color: #3e970e; color: white; font-weight: bold;">Starlingŝava</td>
											<td><span class="ŝava tabelo_alf"> 𐑨 </span></td>
											<td><span class="ŝava tabelo_alf"> 𐑧 </span></td>
											<td><span class="ŝava tabelo_alf"> 𐑦 </span></td>
											<td><span class="ŝava tabelo_alf"> 𐑩 </span></td>
											<td><span class="ŝava tabelo_alf"> 𐑪 </span></td>
											<td><span class="ŝava tabelo_alf"> 𐑤 </span></td>
											<td><span class="ŝava tabelo_alf"> 𐑮 </span></td>
											<td><span class="ŝava tabelo_alf"> 𐑫 </span></td>
											<td><span class="ŝava tabelo_alf"> 𐑵 </span></td>
										</tr>
										<tr>
											<td style="background-color: #3e970e; color: white; font-weight: bold;">Esperantlatina</td>
											<td>a</td>
											<td>e</td>
											<td>i</td>
											<td>o</td>
											<td>u</td>
											<td>l</td>
											<td>r</td>
											<td>m</td>
											<td>n</td>
										</tr>
										<tr>
											<td style="background-color: #3e970e; color: white; font-weight: bold;">Sonvaloro<abbr title="La prononco estas montrata per la Internacia Fonetika Alfabeto, IFA (IPA)."><span class="info_icon" style="color: white;">i</span></abbr></td>
											<td>/a/</td>
											<td>/e/</td>
											<td>/i/</td>
											<td>/o/</td>
											<td>/u/</td>
											<td>/l/</td>
											<td>/ɾ/</td>
											<td>/m/</td>
											<td>/n/</td>
										</tr>
									</tbody>
								</table>
							</div>
						</p>
						<p>Ĉar ne ekzistas ekvivalento de la literoj Q, W, Y kaj X ĉi-alfabete, fremdaj vortoj estas transliterumitaj de oni laŭ tradiciaj esperantaj transliterumreguloj aŭ fonetikvaloro, depende de norma skribado kaj onia skribstilo.</p>
						<div class="noto">
							<p class="n_grisa">"Nelatina grafika bazo helpas evidentigi diversajn antaŭjuĝojn — sed ankaŭ perdigas al ni la grafisman internaciecon. La transskriboj Njutono, Ojlero, Frojdo iom gratas mian okulon; pli facile mi akceptus la ekvivalentajn <span class="ŝava">·𐑵𐑰𐑪𐑑𐑩𐑵𐑩</span>, <span class="ŝava">·𐑩𐑰𐑤𐑧𐑮𐑩</span>, <span class="ŝava">·𐑓𐑮𐑩𐑰𐑛𐑩</span>. Eĉ pli surprize por mi: en la ŝava mi pretas akcepti la fonetikan transskribon de mia familinomo <span class="ŝava">·𐑐𐑨𐑒𐑮𐑩𐑓𐑕𐑒𐑦𐑰</span> (t.e. /pakrofskij/), dum latinlitere tio min ĝenas."</p>
							<p class="n_grisa" style="text-align: right;">—Sergio Pokrovskij (<span class="ŝava">·𐑕𐑧𐑮𐑜𐑦𐑩 ·𐑐𐑨𐑒𐑮𐑩𐑓𐑕𐑒𐑦𐑰</span>)</p>
						</div>
						<p>Aldone, la starlingŝava alfabeto akceptas la uzadon je gramatikligaĵoj. Tamen, ĉi tiaj skribsignoj ne tajpeblas ciferece. Pro Unikodaj limigoj, oni nur povas manskribi ilin. Ili povus utilaj por marki la esperantajn gramatikajn finaĵojn de vortoj (t.e; -O, OJ, -ON, -OJN, ktp.):</p>
						<p>
							<img src="Sxava_alfabeto2.png" style="width: 95%; display: block; margin-right: auto; margin-left: auto;">
						</p>
						<p>Sergio Pokrovskij faris plurajn proponojn pro fonetiko kaj por korekti la nesimetrion de la  parsistemo, tamen  siaj proponaĵoj preskaŭ ne estas uzataj:
							<ul>
								<li>
									<p style="margin-left: auto; margin-right: auto;"><b>Pri la litero Ŭ (<span class="ŝava klav simbolo">𐑘</span>):</b> li argumentis, ke ĉar la litero "<i>Ŭ</i>" povas aperi en normalaj esperantaj vortoj nur kiel “aŭ” kaj “eŭ” (malsame al "j", kiu povas aperi en ajna vokalkombinaĵo), laŭ fonologio oni devus trakti ĝin kiel fonemon. Tial li proponis forigi la starlingŝavan version <span class="ŝava klav simbolo">𐑘</span>, anstataŭigante ĝin je la ŝavaj grafemoj <span class="ŝava klav simbolo">𐑲</span> ("aŭ") kaj <span class="ŝava klav simbolo">𐑱</span> ("eŭ") pokrovskijstarlingŝave.</p>
								</li>
								<li>
									<p style="margin-left: auto; margin-right: auto;"><b>Pri la litero J (<span class="ŝava klav simbolo">𐑢</span>):</b> ĉar la forigo de la litero <span class="ŝava klav simbolo">𐑘</span> (Ŭ), la litero <span class="ŝava klav simbolo">𐑢</span> (J) nun estas senpara. Aldone, Pokrovskij rimarkigis onin ke la paro  <span class="ŝava klav simbolo">𐑘</span>-<span class="ŝava klav simbolo">𐑢</span> ne tute taŭgas ĉar la fonemoj /w/ (litero Ŭ) kaj /j/ (litero J) estas ambaŭ sonorantoj, do iliaj grafemoj devus esti mezaltaj literoj; koncerne la litero <span class="ŝava klav simbolo">𐑘</span>, tio estis solvita per ĝia anstataŭigo je <span class="ŝava klav simbolo">𐑲</span> (“aŭ”) kaj <span class="ŝava klav simbolo">𐑱</span> (“eŭ”), tamen la problemo pri litero <span class="ŝava klav simbolo">𐑢</span> devas esti solvita iel. Por tio, lia propono estas anstataŭigi ĝin je la litero <span class="ŝava klav simbolo">𐑰</span>, kies originala prononco en la ŝava alfabeto estas /iː /.</p>
								</li>
								<li>
									<p style="margin-left: auto; margin-right: auto;"><b>Koncerne la litero C (<span class="ŝava klav simbolo">𐑔</span>) kaj ĝia nekzistinta paro:</b> la litero <span class="ŝava klav simbolo">𐑔</span> ne havas paron en la starlingŝava alfabeto, do tio denove rompas la parsistemon. La fonemo de la grafemo <span class="ŝava klav simbolo">𐑔</span> estas /t͡s/ (senvoĉa konsonanto), do ĝia paro devus esti /d͡z/ (voĉa konsonanto) reprezentota kiel <span class="ŝava klav simbolo">𐑞</span>. Ŝajnas ke multaj esperantaj vortoj kiuj komenciĝas per la litero Z, devenas el vortoj kies ekprononco estis /d͡z/ (ne /z/).</p>
								</li>
							</ul>
						</p>
						<p>Por kompari, jen esperanta frazo (venanta <a href="https://kovro.heliohost.org/eo/tools/Sxava/sxava.html#sec20">el ĉi tiu retpaĝo</a>), skribita per tri malsamaj alfabetoj. Vi povos rimarki ke ambaŭ ŝavidaj estas preskaŭ egalaj kaj interkompreneblaj, do vi povas skribi Esperante per iu ajn el ambaŭ variaĵoj; la elekto estas via.</p>
						<div class="tg-wrap">
							<table id="sciante_frazo" onmouseover="substreki();" onmouseout="malsubstreki();" style="cursor:pointer">
								<tbody>
									<tr>
										<td style="border-color: #1b3f07; background-color: #3e970e; color: white; font-weight: bold; border-top-left-radius: 6px;">Esperantlatine</td>
										<td style="border-style: solid solid solid none; border-width: 1px; border-radius: 0px 6px 0px 0px;">Ŝajnas ke sagaca monaĥo laŭtvoĉe rifuzadis preĝi al DZeŭso sur herbaĵo.</td>
									</tr>
									<tr>
										<td style="border-color: #1b3f07; background-color: #3e970e; color: white; font-weight: bold;">Starlingŝave</td>
										<td><span class="ŝava" style="white-space: wrap;">𐑖𐑨<span class="sciante_frazo">𐑢</span>𐑵𐑨𐑕 𐑒𐑧 𐑕𐑨𐑜𐑨𐑔𐑨 𐑫𐑩𐑵𐑨𐑙𐑩 𐑤<span class="sciante_frazo">𐑨𐑘</span>𐑑𐑝𐑩𐑗𐑧 𐑮𐑦𐑓𐑪𐑟𐑨𐑛𐑦𐑕 𐑐𐑮𐑧𐑡𐑦 𐑨𐑤 ·<span class="sciante_frazo">𐑛𐑟</span>𐑧𐑘𐑕𐑩 𐑕𐑪𐑮 𐑣𐑧𐑮𐑚𐑨𐑠𐑩</span>.</td>
									</tr>
									<tr>
										<td style="border-color: #1b3f07; background-color: #3e970e; color: white; font-weight: bold;">Pokrovskijstarlingŝave</td>
										<td><span class="ŝava" style="white-space: wrap;">𐑖𐑨<span class="sciante_frazo">𐑰</span>𐑵𐑨𐑕 𐑒𐑧 𐑕𐑨𐑜𐑨𐑔𐑨 𐑫𐑩𐑵𐑨𐑙𐑩 𐑤<span class="sciante_frazo">𐑲</span>𐑑𐑝𐑩𐑗𐑧 𐑮𐑦𐑓𐑪𐑟𐑨𐑛𐑦𐑕 𐑐𐑮𐑧𐑡𐑦 𐑨𐑤 ·<span class="sciante_frazo">𐑞</span><span class="sciante_frazo">𐑱</span>𐑕𐑩 𐑕𐑪𐑮 𐑣𐑧𐑮𐑚𐑨𐑠𐑩</span>.</td>
									</tr>
								</tbody>
							</table>
						</div>
						<p>Negravas, ĉe tiu ĉi retpaĝo estas <a href="https://esperanto.us/sxava_alfabeto/">pluraj ekzercoj</a> pri la starlingŝava alfabeto, faritaj de Starling mem, por praktiki legadon je ĉi tiu skribsistemo.</p>
						<div class="div_interaga" style="margin: 30px auto; max-width:1000px; padding-left: 3px; padding-right: 3px;">
							<div>
								<p style="text-align: center; margin-bottom: 0.5em;"><i>Jen tabelo, kiu montras la literojn de la ŝava kaj [pokrovskij]starlingŝava alfabeto, krom iliaj fonemojn kaj Unikodaĵon. La literoj aŭtomate estos ordigitaj laŭ viaj elektoj.  Elektu, kiajn informojn montri sur la tabelo:</i></p>
								<form id="formulario_alfabeto" name="form_sci" style="margin-left: 2%; margin-right: 2%;">
									<ul style="display:flex; align-items:center; flex-direction: row; padding: 0%; flex-wrap:wrap; justify-content: center; margin-left: 5%; margin-right:5%; margin-top:0.5em;">
										<p style="white-space: nowrap; margin-left:0%; margin-right:5%; margin-top:0.5em;">
											<input name="sci_cxio" id="sci_cxio" type="checkbox" value="cxion" checked onclick="sci_montr_cxion()";><label for="sci_cxio">Montri ĉion</label><br>
											<span>      </span><input name="sci_uniko" id="sci_uniko" type="checkbox" value="uniko" checked onclick="sci_montr_unikode();"><label for="sci_uniko">Montri Unikodaĵojn</label><br>
											<span>      </span><input name="sci_sxava" id="sci_sxava" type="checkbox" value="sxava" checked onclick="sci_montr_sxava();"><label for="sci_sxava">Montri ŝavan alfabeton</label><br>
											<span>      </span><input name="sci_pssxa" id="sci_pssxa" type="checkbox" value="pssxa" checked disabled="disabled"><label for="sci_pssxa">Montri [pokrovskij]starlingŝavan alfabeton</label>
										</p>
										<p style="white-space: nowrap; margin-left:5%; margin-right:0%; margin-top:0.5em;">
											<input type="radio" name="sci_ordo" id="sci_or_sxa" checked onclick="ordigi_sxa();"><label for="sci_or_sxa">Ordigi laŭ la ŝava ordo</label><br>
											<input type="radio" name="sci_ordo" id="sci_or_sta" onclick="ordigi_star();"><label for="sci_or_sta">Ordigi laŭ la starlingŝava ordo</label>
										</p>
									</ul>
								</form>
							</div>
							<div class="tg-wrap">
							<table id="ŝava_alfabeto">
								<thead>
									<tr>
										<th id="sci_h_n1">N° Ŝava</th>
										<th id="sci_h_n2">N° Starlinga /<br><span style="white-space: nowrap;">N° Pokrovskija</span></th>
										<th id="sci_h_n3" style="display:none">N° Pokrovskija</th>
										<th id="sci_h_U">Unikode</th>
										<th id="sci_h_sxn">Ŝava Nomo</th>
										<th id="sci_h_sxf">Ŝava Fonemo</th>
										<th id="sci_h_sxg">Ŝava Grafemo</th>
										<th id="sci_h_stf">Starlinga Fonemo</th>
										<th id="sci_h_eog">Esperantlatina Grafemo</th>	
									</tr>
								</thead>
								<tbody id="ŝava_alfabeto_tb">
									<tr>
										<td>1</td>
										<td><b>20</b> | 22</td>
										<td style="display:none">23</td>
										<td>U+10450</td>
										<td>Peep</td>
										<td>/p/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑐</span></td>
										<td style="font-weight: bold;">/p/</td>
										<td style="font-weight: bold;">P</td>
									</tr>
									<tr>
										<td>2</td>
										<td><b>2</b> | 3</td>
										<td style="display:none">3</td>
										<td>U+1045A</td>
										<td>Bib</td>
										<td>/b/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑚</span></td>
										<td style="font-weight: bold;">/b/</td>
										<td style="font-weight: bold;">B</td>
									</tr>
									<tr>
										<td>3</td>
										<td><b>24</b> | 26</td>
										<td style="display:none">27</td>
										<td>U+10451</td>
										<td>Tot</td>
										<td>/t/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑑</span></td>
										<td style="font-weight: bold;">/t/</td>
										<td style="font-weight: bold;">T</td>
									</tr>
									<tr>
										<td>4</td>
										<td><b>5</b> | 6</td>
										<td style="display:none">6</td>
										<td>U+1045B</td>
										<td>Dead</td>
										<td>/d/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑛</span></td>
										<td style="font-weight: bold;">/d/</td>
										<td style="font-weight: bold;">D</td>
									</tr>
									<tr>
										<td>5</td>
										<td><b>15</b> | 17</td>
										<td style="display:none">18</td>
										<td>U+10452</td>
										<td>Kick</td>
										<td>/k/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑒</span></td>
										<td style="font-weight: bold;">/k/</td>
										<td style="font-weight: bold;">K</td>
									</tr>
									<tr>
										<td>6</td>
										<td><b>8</b> | 10</td>
										<td style="display:none">10</td>
										<td>U+1045C</td>
										<td>Gag</td>
										<td>/ɡ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑜</span></td>
										<td style="font-weight: bold;">/ɡ/</td>
										<td style="font-weight: bold;">G</td>
									</tr>
									<tr>
										<td>7</td>
										<td><b>7</b> | 9</td>
										<td style="display:none">9</td>
										<td>U+10453</td>
										<td>Fee</td>
										<td>/f/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑓</span></td>
										<td style="font-weight: bold;">/f/</td>
										<td style="font-weight: bold;">F</td>
									</tr>
									<tr>
										<td>8</td>
										<td><b>26</b> | 28</td>
										<td style="display:none">30</td>
										<td>U+1045D</td>
										<td>Vow</td>
										<td>/v/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑝</span></td>
										<td style="font-weight: bold;">/v/</td>
										<td style="font-weight: bold;">V</td>
									</tr>
									<tr>
										<td>9</td>
										<td><b>3</b> | 4</td>
										<td style="display:none">4</td>
										<td>U+10454</td>
										<td>Thigh</td>
										<td>/θ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑔</span></td>
										<td style="font-weight: bold;">/t͡s/</td>
										<td style="font-weight: bold;">C</td>
									</tr>
									<tr>
										<td>10</td>
										<td><b>-</b> | 30</td>
										<td style="display:none">32</td>
										<td>U+1045E</td>
										<td>They</td>
										<td>/ð/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑞</span></td>
										<td style="font-weight: bold;">/d͡z/</td>
										<td style="font-weight: bold;">DZ*</td>
									</tr>
									<tr>
										<td>11</td>
										<td><b>22</b> | 24</td>
										<td style="display:none">25</td>
										<td>U+10455</td>
										<td>So</td>
										<td>/s/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑕</span></td>
										<td style="font-weight: bold;">/s/</td>
										<td style="font-weight: bold;">S</td>
									</tr>
									<tr>
										<td>12</td>
										<td><b>28</b> | 29</td>
										<td style="display:none">31</td>
										<td>U+1045F</td>
										<td>Zoo</td>
										<td>/z/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑟</span></td>
										<td style="font-weight: bold;">/z/</td>
										<td style="font-weight: bold;">Z</td>
									</tr>
									<tr>
										<td>13</td>
										<td><b>23</b> | 25</td>
										<td style="display:none">26</td>
										<td>U+10456</td>
										<td>Sure</td>
										<td>/ʃ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑖</span></td>
										<td style="font-weight: bold;">/ʃ/</td>
										<td style="font-weight: bold;">Ŝ</td>
									</tr>
									<tr>
										<td>14</td>
										<td><b>14</b> | 16</td>
										<td style="display:none">17</td>
										<td>U+10460</td>
										<td>Measure</td>
										<td>/ʒ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑠</span></td>
										<td style="font-weight: bold;">/ʒ/</td>
										<td style="font-weight: bold;">Ĵ</td>
									</tr>
									<tr>
										<td>15</td>
										<td><b>4</b> | 5</td>
										<td style="display:none">5</td>
										<td>U+10457</td>
										<td>Church</td>
										<td>/t͡ʃ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑗</span></td>
										<td style="font-weight: bold;">/t͡ʃ/</td>
										<td style="font-weight: bold;">Ĉ</td>
									</tr>
									<tr>
										<td>16</td>
										<td><b>9</b> | 11</td>
										<td style="display:none">11</td>
										<td>U+10461</td>
										<td>Judge</td>
										<td>/d͡ʒ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑡</span></td>
										<td style="font-weight: bold;">/d͡ʒ/</td>
										<td style="font-weight: bold;">Ĝ</td>
									</tr>
									<tr>
										<td>17</td>
										<td><b>27</b> | -</td>
										<td style="display:none">29</td>
										<td>U+10458</td>
										<td>Yea</td>
										<td>/j/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑘</span></td>
										<td style="font-weight: bold;">/w/</td>
										<td style="font-weight: bold;">Ŭ</td>
									</tr>
									<tr>
										<td>18</td>
										<td><b>13</b> | -</td>
										<td style="display:none">15</td>
										<td>U+10462</td>
										<td>Woe</td>
										<td>/w/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑢</span></td>
										<td style="font-weight: bold;">/j/</td>
										<td style="font-weight: bold;">J</td>
									</tr>
									<tr>
										<td>19</td>
										<td><b>11</b> | 13</td>
										<td style="display:none">13</td>
										<td>U+10459</td>
										<td>Hung</td>
										<td>/ŋ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑙</span></td>
										<td style="font-weight: bold;">/x/</td>
										<td style="font-weight: bold;">Ĥ</td>
									</tr>
									<tr>
										<td>20</td>
										<td><b>10</b> | 12</td>
										<td style="display:none">12</td>
										<td>U+10463</td>
										<td>Ha-Ha</td>
										<td>/h/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑣</span></td>
										<td style="font-weight: bold;">/h/</td>
										<td style="font-weight: bold;">H</td>
									</tr>
									<tr>
										<td>21</td>
										<td><b>16</b> | 18</td>
										<td style="display:none">19</td>
										<td>U+10464</td>
										<td>Loll</td>
										<td>/l/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑤</span></td>
										<td style="font-weight: bold;">/l/</td>
										<td style="font-weight: bold;">L</td>
									</tr>
									<tr>
										<td>22</td>
										<td><b>21</b> | 23</td>
										<td style="display:none">24</td>
										<td>U+1046E</td>
										<td>Roar</td>
										<td>/ɾ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑮</span></td>
										<td style="font-weight: bold;">/ɾ/</td>
										<td style="font-weight: bold;">R</td>
									</tr>
									<tr class="sci_neeo">
										<td>23</td>
										<td>-</td>
										<td style="display:none">34</td>
										<td>U+10465</td>
										<td>Mime</td>
										<td>/m/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑥</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr class="sci_neeo">
										<td>24</td>
										<td>-</td>
										<td style="display:none">35</td>
										<td>U+1046F</td>
										<td>Nun</td>
										<td>/n/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑯</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr>
										<td>25</td>
										<td><b>12</b> | 14</td>
										<td style="display:none">14</td>
										<td>U+10466</td>
										<td>If</td>
										<td>/ɪ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑦</span></td>
										<td style="font-weight: bold;">/i/</td>
										<td style="font-weight: bold;">I</td>
									</tr>
									<tr>
										<td>26</td>
										<td><b>-</b> | 15</td>
										<td style="display:none">16</td>
										<td>U+10470</td>
										<td>Eat</td>
										<td>/iː /</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑰</span></td>
										<td style="font-weight: bold;">/j/</td>
										<td style="font-weight: bold;">J</td>
									</tr>
									<tr>
										<td>27</td>
										<td><b>6</b> | 7</td>
										<td style="display:none">7</td>
										<td>U+10467</td>
										<td>Egg</td>
										<td>/ɛ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑧</span></td>
										<td style="font-weight: bold;">/e/</td>
										<td style="font-weight: bold;">E</td>
									</tr>
									<tr>
										<td>28</td>
										<td><b>-</b> | 8</td>
										<td style="display:none">8</td>
										<td>U+10471</td>
										<td>Age</td>
										<td>/eɪ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑱</span></td>
										<td style="font-weight: bold;">/ew/</td>
										<td style="font-weight: bold;">EŬ</td>
									</tr>
									<tr>
										<td>29</td>
										<td><b>1</b> | 1</td>
										<td style="display:none">1</td>
										<td>U+10468</td>
										<td>Ash</td>
										<td>/æ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑨</span></td>
										<td style="font-weight: bold;">/a/</td>
										<td style="font-weight: bold;">A</td>
									</tr>
									<tr>
										<td>30</td>
										<td><b>-</b> | 2</td>
										<td style="display:none">2</td>
										<td>U+10472</td>
										<td>Ice</td>
										<td>/aɪ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑲</span></td>
										<td style="font-weight: bold;">/aw/</td>
										<td style="font-weight: bold;">AŬ</td>
									</tr>
									<tr>
										<td>31</td>
										<td><b>19</b> | 21</td>
										<td style="display:none">22</td>
										<td>U+10469</td>
										<td>Ado</td>
										<td>/ə/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑩</span></td>
										<td style="font-weight: bold;">/o/</td>
										<td style="font-weight: bold;">O</td>
									</tr>
									<tr>
										<td>32</td>
										<td>* | *</td>
										<td style="display:none">33</td>
										<td>U+10473</td>
										<td>Up</td>
										<td>/ʌ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑳</span></td>
										<td style="font-weight: bold;">/on/</td>
										<td style="font-weight: bold;">ON**</td>
									</tr>
									<tr>
										<td>33</td>
										<td><b>25</b> | 27</td>
										<td style="display:none">28</td>
										<td>U+1046A</td>
										<td>On</td>
										<td>/ɒ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑪</span></td>
										<td style="font-weight: bold;">/u/</td>
										<td style="font-weight: bold;">U</td>
									</tr>
									<tr class="sci_neeo">
										<td>34</td>
										<td>-</td>
										<td style="display:none">36</td>
										<td>U+10474</td>
										<td>Oak</td>
										<td>/oʊ/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑴</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr>
										<td>35</td>
										<td><b>17</b> | 19</td>
										<td style="display:none">20</td>
										<td>U+1047B</td>
										<td>Wool</td>
										<td>/ʊ/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑫</span></td>
										<td style="font-weight: bold;">/m/</td>
										<td style="font-weight: bold;">M</td>
									</tr>
									<tr>
										<td>36</td>
										<td><b>18</b> | 20</td>
										<td style="display:none">21</td>
										<td>U+10475</td>
										<td>Ooze</td>
										<td>/uː/</td>
										<td><span class="ŝava" style="font-weight: bold; font-size: 105%;">𐑵</span></td>
										<td style="font-weight: bold;">/n/</td>
										<td style="font-weight: bold;">N</td>
									</tr>
									<tr class="sci_neeo">
										<td>37</td>
										<td>-</td>
										<td style="display:none">37</td>
										<td>U+1046C</td>
										<td>Out</td>
										<td>/aʊ/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑬</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr class="sci_neeo">
										<td>38</td>
										<td>-</td>
										<td style="display:none">38</td>
										<td>U+10476</td>
										<td>Oil</td>
										<td>/ɔɪ/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑶</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr class="sci_neeo">
										<td>39</td>
										<td>-</td>
										<td style="display:none">39</td>
										<td>U+1046D</td>
										<td>Ah</td>
										<td>/ɑː/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑭</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr class="sci_neeo">
										<td>40</td>
										<td>-</td>
										<td style="display:none">40</td>
										<td>U+10477</td>
										<td>Awe</td>
										<td>/ɔː/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑷</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr class="sci_neeo">
										<td>41</td>
										<td>-</td>
										<td style="display:none">41</td>
										<td>U+10478</td>
										<td>Are</td>
										<td>/ɑːr/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑸</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr class="sci_neeo">
										<td>42</td>
										<td>-</td>
										<td style="display:none">42</td>
										<td>U+10479</td>
										<td>Or</td>
										<td>/ɔːr/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑹</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr class="sci_neeo">
										<td>43</td>
										<td>-</td>
										<td style="display:none">43</td>
										<td>U+1047A</td>
										<td>Air</td>
										<td>/ɛər/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑺</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr class="sci_neeo">
										<td>44</td>
										<td>-</td>
										<td style="display:none">44</td>
										<td>U+1047B</td>
										<td>Err</td>
										<td>/ɜːr/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑻</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr class="sci_neeo">
										<td>45</td>
										<td>-</td>
										<td style="display:none">45</td>
										<td>U+1047C</td>
										<td>Array</td>
										<td>/ər/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑼</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr class="sci_neeo">
										<td>46</td>
										<td>-</td>
										<td style="display:none">46</td>
										<td>U+1047D</td>
										<td>Ear</td>
										<td>/ɪər/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑽</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr class="sci_neeo">
										<td>47</td>
										<td>-</td>
										<td style="display:none">47</td>
										<td>U+1047E</td>
										<td>Ian</td>
										<td>/iə/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑾</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
									<tr class="sci_neeo">
										<td>48</td>
										<td>-</td>
										<td style="display:none">48</td>
										<td>U+1047F</td>
										<td>Yew</td>
										<td>/juː/</td>
										<td><span class="ŝava" style="font-size: 105%;">𐑿</span></td>
										<td>-</td>
										<td>-</td>
									</tr>
								</tbody>
							</table>
							</div>
							<p class="text_min">
								<b>* La digrafo DZ ne ekzistas Esperante.</b>
								<br>
								<b>** La grafemo <span class="klav ŝava simbolo">𐑳</span> estas nur ligaĵo de ON laŭ la esperantaj ŝavidaj alfabetoj.</b>
							</p>
						</div>
					</section>
				</section>
				<div class="blank"></div>
				<hr>
				<div class="blank2"></div>
				<section name="sec_uzante" id="sec_uzante">
					<h1 id="klavaro">II.  <i>Uzante la starlingŝavan klavarfasonon</i></h1>
					<p>Tiu ĉi klavaro havas tri versiojn; la komputilan (<span class="klav windows"><img src="win11_logo.png" height="10px" weight="auto"> Vindozo</span>, <span class="klav apple"><img src="apple_logo.png" height="10px" weight="auto"> macOS</span> kaj <span class="klav linux"><img src="linux_logo.png" height="10px" weight="auto"> Linukso</span>), la saĝtelefonan (<span class="klav android"><img src="Android.png" height="10px" weight="auto"> Android</span>, <span class="klav apple"><img src="apple_logo.png" height="10px" weight="auto"> iOS</span> kaj <span class="klav apple"><img src="apple_logo.png" height="10px" weight="auto"> iPadOS</span>) kaj retan (per <a href="https://keymanweb.com/">Keyman Web</a>). Memoru, ke vi povas uzi la piktogramon ☰ supre dekstre por iri al la platformo, kies vi interesiĝas.</p>
					<section name="sec_komputilo" id="sec_komputilo">
						<h2 id="komver">★ 1. Komputila versio</h2>
						<div class="noto blua">
							<ul class="horizontala">
								<div>
									<li><img src="info.png" alt="noto" height="30px" weight="auto"></li>
								</div>
								<div>
									<p><i>En ĉi tiu sekcio (kaj en la sekvaj), estos menciitaj pluraj <b>modifklavoj</b>. Ĉi tiaj klavoj estas uzataj por ŝanĝi la klavartavoloj aŭ fari operaciojn per klavkombinaĵo, en ambaŭ kazoj; la modifklavo devos esti premata dum la premo de la alia klavo. Modifklavoj estas <span class="klav shift">⇧ SHIFT</span> (majuskligklavoj), <span class="klav RALT">⎇ ALT</span> (aliigklavo), <span class="klav RALT">⇮ ALTGr</span> (aligrafikigklavo‽), <span class="klav ctrl"><span class="helm">⎈</span> CTRL</span> (stirklavo), ktp; respektivaj koloroj estas asignitaj al ĉiuj ĉi klavoj ĉi-paĝe. Alia grava klavo estas <span class="klav">⇪ CAPS-Lock</span> (majusklaseruro), ĝi ne estas konsiderita kiel modifklavon, sed en ĉi-klavarfasono faras tiun funkcion; ŝanĝante la ŝavan alfabeton je latinan alfabeton. </i></p>
									<p><i>Konsideru, ke la modifklavo <span class="klav RALT">⇮ ALTGr</span> aperas nur sur kelkaj eŭropaj klavaroj kaj ĝia ekvivalento povus esti la klavkombinaĵo <span class="klav"><span class="ctrl"><span class="helm">⎈</span> CTRL</span><span class="plus"> + </span><span class="RALT">⎇ ALT</span></span> aŭ la dekstra <span class="klav RALT">⎇ ALT</span>. Krome konsideru, ke sur klavaroj de komputiloj, kiuj uzas na <span class="klav apple"><img src="apple_logo.png" height="10px" weight="auto"> macOS</span>, la klavo <span class="klav RALT">⎇ ALT</span> povus esti <span class="klav"><span class="RALT">⌥ Option</span></span>.</i></p>
								</div>
							</ul>
						</div>
						<section>
							<p>La komputila versio de ĉi tiu klavarfasono funkcias per Keyman, ĉe <span class="klav windows"><img src="win11_logo.png" height="10px" weight="auto"> Vindozo</span>, <span class="klav apple"><img src="apple_logo.png" height="10px" weight="auto"> MacOS</span> kaj <span class="klav linux"><img src="linux_logo.png" height="10px" weight="auto"> Linukso</span>. Tiu ĉi adaptiĝas al via ordinara latina klavarfasono kaj ĉi tie vi povas rigardi kiel la klavaro kondutas kiam la fizika klavara aranĝo estas ŝanĝita aŭ kiam vi premos modifklavojn por ŝangi la klavartavolojn. Tio estas nura ekzemplo; vi povos agordi kelkajn senpaŝklavojn poste. Se vi volas pliajn informojn pri la komputila versio, daŭrigu vidi sube.</p>
							<div class="div_interaga" style="padding-bottom: 0.7em; margin: 3px auto; max-width:1300px;">
								<p style="text-align: center;"><b>Ekzempla vidklavaro:</b>
									<select id="elektita_vidklavarfasono" name="elektita_vidklavarfasono"> 
										<option value="literoj"	>Montri nur literojn (QWERTY) [ANSI]</option>
										<option value="en_US"	>🇺🇸 Usona klavaranĝo (QWERTY) [ANSI]</option>
										<!--<option value="DVORAK"	>🇺🇸 Usona klavaranĝo (DVORAK) [ANSI]</option>-->
										<option value="es_ES"	>🇪🇸 Hispana klavaranĝo (QWERTY-Ñ) [ISO]</option>
										<option value="es_LA"	>🇲🇽 Latinamerikhispana klavaranĝo (QWERTY-Ñ) [ISO]</option>
										<option value="fr_FR"	>🇫🇷 Franca klavaranĝo (AZERTY) [ISO]</option>
										<option value="de_DE"	>🇩🇪 Germana klavaranĝo (QWERTZ) [ISO]</option>
									</select>
								</p>
								<svg id="vidklavaro" viewBox="0 0 840 300" version="1.1" sodipodi:docname="usona-starlingŝava-klavarfasono.svg" inkscape:version="1.2.2 (732a01da63, 2022-12-09)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
								<defs id="defs30">
									<linearGradient id="linearGradient6223" inkscape:collect="always">
										<stop id="stop6219" style="stop-color:#ff7f2a;stop-opacity:1;" offset="0"></stop>
										<stop id="stop6221" style="stop-color:#478e50;stop-opacity:1;" offset="0.92219675"></stop>
									</linearGradient>
									<linearGradient id="linearGradient6215" inkscape:swatch="solid">
										<stop id="stop6213" style="stop-color:#ff7f2a;stop-opacity:1;" offset="0"></stop>
									</linearGradient>
									<linearGradient id="DCS">
										<stop id="stop4" offset="0%" stop-color="black" stop-opacity="0"></stop>
										<stop id="stop6" offset="40%" stop-color="black" stop-opacity="0.1"></stop>
										<stop id="stop8" offset="60%" stop-color="black" stop-opacity="0.1"></stop>
										<stop id="stop10" offset="100%" stop-color="black" stop-opacity="0"></stop>
									</linearGradient>
									<linearGradient id="SPACE" x1="0%" x2="0%" y1="0%" y2="100%">
										<stop id="stop13" offset="0%" stop-color="black" stop-opacity="0.1"></stop>
										<stop id="stop15" offset="20%" stop-color="black" stop-opacity="0.0"></stop>
										<stop id="stop17" offset="40%" stop-color="black" stop-opacity="0.0"></stop>
										<stop id="stop19" offset="100%" stop-color="black" stop-opacity="0.1"></stop>
									</linearGradient>
									<radialGradient id="DSA">
										<stop id="stop22" offset="0%" stop-color="black" stop-opacity="0.1"></stop>
										<stop id="stop24" offset="10%" stop-color="black" stop-opacity="0.1"></stop>
										<stop id="stop26" offset="100%" stop-color="black" stop-opacity="0"></stop>
									</radialGradient>
									<radialGradient id="SA" xlink:href="#DSA">
										<meshgradient id="meshgradient5745" inkscape:collect="always" gradientUnits="userSpaceOnUse" x="209.5" y="220">
											<meshrow id="meshrow5747">
											<meshpatch id="meshpatch5749">
												<stop id="stop5751" path="c 107.833,0  215.667,0  323.5,0" style="stop-color:#ffffff;stop-opacity:1"></stop>
												<stop id="stop5753" path="c 0,13.3333  0,26.6667  0,40" style="stop-color:#fcfcfc;stop-opacity:1"></stop>
												<stop id="stop5755" path="c -107.833,0  -215.667,0  -323.5,0" style="stop-color:#ffffff;stop-opacity:1"></stop>
												<stop id="stop5757" path="c 0,-13.3333  0,-26.6667  0,-40" style="stop-color:#fcfcfc;stop-opacity:1"></stop>
											</meshpatch>
											</meshrow>
										</meshgradient>
										<linearGradient id="linearGradient6225" inkscape:collect="always" xlink:href="#linearGradient6223" x1="219.16895" y1="76.737253" x2="225.13484" y2="72.987259" gradientUnits="userSpaceOnUse">
										</linearGradient>
									</radialGradient>
								</defs>
								<g id="Background" inkscape:groupmode="layer" inkscape:label="Background" style="display:inline" inkscape:highlight-color="#8f8f8f">
									<rect id="background_color" width="820" height="280" stroke-width="1" rx="6" x="0" y="0" inkscape:label="background_color" transform="translate(10,10)" sodipodi:insensitive="true"></rect>
								</g>
								<g id="Keyboard" inkscape:groupmode="layer" inkscape:label="Keyboard" style="display:inline" inkscape:highlight-color="#8f8f8f">
									<g id="Letter_Keys" inkscape:groupmode="layer" inkscape:label="Letter Keys" style="display:inline">
										<g class="keycap" id="Key_M" transform="translate(15,15)" inkscape:label="Key_M" style="display:inline">
											<rect class="outer border" id="OutB_M" x="446.5" y="163" width="52" height="52" rx="5" inkscape:label="OutB_M"></rect>
											<rect class="outer fill" id="OutF_M" x="446.5" y="163" width="52" height="52" rx="5" inkscape:label="OutF_M"></rect>
											<rect class="inner border" id="InB_M" x="452.5" y="166" width="40" height="40" rx="5" inkscape:label="InB_M"></rect>
											<rect class="inner fill" id="InF_M" x="452.5" y="166" width="40" height="40" rx="5" inkscape:label="InF_M"></rect>
											<g class="qwerty" id="Key_M_Original" inkscape:label="Key_M_Original" style="display:inline">
												<g class="Figuroj_group_33" id="g5406" inkscape:label="33_Figuroj_M" style="display:none" inkscape:highlight-color="#58392b" transform="translate(256.49259,108)" sodipodi:insensitive="true">
													<rect class="Figuroj_33" id="rect5388" inkscape:label="33_9_M" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="rect5390" inkscape:label="33_8_M" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="rect5392" inkscape:label="33_7_M" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="33_Figuroj_Gr" id="rect5394" inkscape:label="33_6_M" width="8" height="13.15" x="212" y="84.849998" rx="4"></rect>
													<rect class="33_Figuroj_Gr" id="rect5396" inkscape:label="33_5_M" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629"></rect>
													<rect class="33_Figuroj_Gr" id="rect5398" inkscape:label="33_4_M" width="8" height="13.425003" x="212" y="58" rx="4"></rect>
													<rect class="Figuroj_33" id="rect5400" inkscape:label="33_3_M" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="rect5402" inkscape:label="33_2_M" width="16" height="13.424997" x="196" y="71.425003" rx="5"></rect>
													<rect class="Figuroj_33" id="rect5404" inkscape:label="33_1_M" width="16" height="13.425" x="196" y="58" rx="5"></rect>
												</g>
												<g class="Figuroj_group_22" id="g5416" inkscape:label="22_Figuroj_M" style="display:none" inkscape:highlight-color="#58392b" transform="translate(256.49259,108)" sodipodi:insensitive="true">
													<rect class="Figuroj_22" id="rect5408" inkscape:label="22_4_M" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect5410" inkscape:label="22_3_M" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect5412" inkscape:label="22_2_M" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect5414" inkscape:label="22_1_M" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
												</g>
												<g class="simboloj_33" id="g5428" inkscape:label="simboloj_33_M" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(256.49259,108)">
													<text class="skr-sign s33 gr" id="text5418" xml:space="preserve" inkscape:label="33_Gr_M_min" x="221.99603" y="80.364136" style="stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">μ</text>
													<text class="skr-sign s33 gr" id="text5420" xml:space="preserve" inkscape:label="33_Gr_M_may" x="215.78831" y="70.133438">Μ</text>
													<text class="skr-sign s33 sxa" id="text5422" xml:space="preserve" inkscape:label="33_Sxa_M" x="209.57426" y="92.6633" transform="scale(0.97203684,1.0287676)">𐑫</text>
													<text class="skr-sign s33 lat" id="text5424" xml:space="preserve" inkscape:label="33_Lat_M_min" x="209.57426" y="80.354668" transform="scale(0.97203684,1.0287676)">m</text>
													<text class="skr-sign s33 lat_may" id="text5426" xml:space="preserve" inkscape:label="33_Lat_M_may" x="209.57426" y="68.307861" transform="scale(0.97203684,1.0287676)">M</text>
												</g>
												<g class="simboloj_22" id="g5438" inkscape:label="simboloj_22_M" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(256.49259,108)">
													<text class="skr-sign s22 gr" id="text5430" xml:space="preserve" inkscape:label="22_Gr_M_min" x="232.50911" y="87.811966" style="font-size:16px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">μ</text>
													<text class="skr-sign s22 gr" id="text5432" xml:space="preserve" inkscape:label="22_Gr_M_may" x="226.00742" y="72.848473">Μ</text>
													<text class="skr-sign s22 lat" id="text5434" xml:space="preserve" inkscape:label="22_Lat_M_min" x="211.93375" y="89.222946" transform="scale(0.97203684,1.0287676)">m</text>
													<text class="skr-sign s22 lat_may" id="text5436" xml:space="preserve" inkscape:label="22_Lat_M_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">M</text>
												</g>
												<g class="Figuroj_group_11" id="g5446" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(256.99258,108)">
													<rect class="Figuroj_11" id="rect5440" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
													<rect class="Figuroj_11" id="rect5442" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
													<rect class="Figuroj_11" id="rect5444" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
												</g>
												<g class="simboloj_11" id="g5450" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(256.99258,108)">
													<text class="skr-sign s11_sx sxa" id="text5448" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑫</text>
												</g>
											</g>
											<g class="simboloj_12 FR" id="g3386" inkscape:label="simboloj_12_Comma_FR" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(256.84158,108)">
												<text class="skr-sign FR simb shift" id="text3382" xml:space="preserve" inkscape:label="12_Sim_Comma_Shift_FR" x="226.00742" y="72.848473">?</text>
												<text class="skr-sign FR simb" id="text3384" xml:space="preserve" inkscape:label="12_Sim_Comma_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">,</text>
											</g>
										</g>
										<g class="keycap" id="Key_N" transform="translate(15,15)" inkscape:label="Key_N" style="display:inline">
											<rect class="outer border" id="OutB_N" x="392.5" y="163" width="52" height="52" rx="5" inkscape:label="OutB_N"></rect>
											<rect class="outer fill" id="OutF_N" x="392.5" y="163" width="52" height="52" rx="5" inkscape:label="OutF_N"></rect>
											<rect class="inner border" id="InB_N" x="398.5" y="166" width="40" height="40" rx="5" inkscape:label="InB_N"></rect>
											<rect class="inner fill" id="InF_N" x="398.5" y="166" width="40" height="40" rx="5" inkscape:label="InF_N"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_N" inkscape:label="33_Figuroj_N" inkscape:highlight-color="#58392b" style="display:none" transform="translate(202.49259,108)" sodipodi:insensitive="true">
												<rect class="Figuroj_33" id="33_9_N" inkscape:label="33_9_N" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
												<rect class="Figuroj_33" id="33_8_N" inkscape:label="33_8_N" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)"></rect>
												<rect class="Figuroj_33" id="33_7_N" inkscape:label="33_7_N" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_N" inkscape:label="33_6_N" width="8" height="13.15" x="212" y="84.849998" rx="4"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_N" inkscape:label="33_5_N" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_N" inkscape:label="33_4_N" width="8" height="13.425003" x="212" y="58" rx="4"></rect>
												<rect class="Figuroj_33" id="33_3_N" inkscape:label="33_3_N" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
												<rect class="Figuroj_33" id="33_2_N" inkscape:label="33_2_N" width="16" height="13.424997" x="196" y="71.425003" rx="5"></rect>
												<rect class="Figuroj_33" id="33_1_N" inkscape:label="33_1_N" width="16" height="13.425" x="196" y="58" rx="5"></rect>
											</g>
											<g class="simboloj_33" id="simboloj_33_N" inkscape:label="simboloj_33_N" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(202.49259,108)" sodipodi:insensitive="true">
												<text class="skr-sign s33 aliaj" id="33_Alia_N_min" xml:space="preserve" inkscape:label="33_Alia_N_min" x="234.40752" y="80.364136" transform="scale(0.97203684,1.0287676)">ñ</text>
												<text class="skr-sign s33 aliaj" id="33_Alia_N_may" xml:space="preserve" inkscape:label="33_Alia_N_may" x="234.4075" y="68.168472" transform="scale(0.97203684,1.0287676)">Ñ</text>
												<text class="skr-sign s33 gr" id="33_Gr_N" xml:space="preserve" inkscape:label="33_Gr_N" style="stroke-dasharray:none" x="222.14755" y="80.364136" transform="scale(0.97203684,1.0287676)">ν</text>
												<text class="skr-sign s33 gr" id="33_Gr_N_may" xml:space="preserve" inkscape:label="33_Gr_N_may" x="215.78831" y="70.133438">Ν</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_N" xml:space="preserve" inkscape:label="33_Sxa_N" x="209.48903" y="92.6633" transform="scale(0.97203684,1.0287676)">𐑵</text>
												<text class="skr-sign s33 lat" id="33_Lat_N_min" xml:space="preserve" inkscape:label="33_Lat_N_min" x="209.48904" y="80.354668" transform="scale(0.97203684,1.0287676)">n</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_N_may" xml:space="preserve" inkscape:label="33_Lat_N_may" x="209.48903" y="68.307861" transform="scale(0.97203684,1.0287676)">N</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_N" inkscape:label="22_Figuroj_N" style="display:none" inkscape:highlight-color="#58392b" transform="translate(202.49259,108)">
												<rect class="Figuroj_22" id="22_4_N" inkscape:label="22_4_N" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_N" inkscape:label="22_3_N" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_N" inkscape:label="22_2_N" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_N" inkscape:label="22_1_N" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="simboloj_22_N" inkscape:label="simboloj_22_N" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(202.49259,108)">
												<text class="skr-sign s22 gr" id="22_Gr_N_min" xml:space="preserve" inkscape:label="22_Gr_N_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ν</text>
												<text class="skr-sign s22 gr" id="22_Gr_N_may" xml:space="preserve" inkscape:label="22_Gr_N_may" x="226.00742" y="72.848473">Ν</text>
												<text class="skr-sign s22 lat" id="22_Lat_N_min" xml:space="preserve" inkscape:label="22_Lat_N_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">n</text>
												<text class="skr-sign s22 lat_may" id="22_Lat_N_may" xml:space="preserve" inkscape:label="22_Lat_N_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">N</text>
												<text class="skr-sign s22 aliaj" id="22_Alia_N_min" xml:space="preserve" inkscape:label="22_Alia_N_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ñ</text>
												<text class="skr-sign s22 aliaj" id="22_Alia_N_may" xml:space="preserve" inkscape:label="22_Alia_N_may" x="226.00742" y="72.848473">Ñ</text>
											</g>
											<g class="Figuroj_group_11" id="g13938" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(202.99258,108)">
												<rect class="Figuroj_11" id="rect13932" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect13934" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect13936" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g13942" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(202.99258,108)">
												<text class="skr-sign s11_sx sxa" id="text13940" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑵</text>
											</g>
										</g>
										<g class="keycap" id="Key_B" transform="translate(15,15)" inkscape:label="Key_B" style="display:inline">
											<rect class="outer border" id="OutB_B" x="338.5" y="163" width="52" height="52" rx="5" inkscape:label="OutB_B"></rect>
											<rect class="outer fill" id="OutF_B" x="338.5" y="163" width="52" height="52" rx="5" inkscape:label="OutF_B"></rect>
											<rect class="inner border" id="InB_B" x="344.5" y="166" width="40" height="40" rx="5" inkscape:label="InB_B"></rect>
											<rect class="inner fill" id="InF_B" x="344.5" y="166" width="40" height="40" rx="5" inkscape:label="InF_B"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_B" inkscape:label="33_Figuroj_B" style="display:none" inkscape:highlight-color="#58392b" transform="translate(148.49259,108)">
												<rect class="Figuroj_33" id="33_9_B" inkscape:label="33_9_B" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
												<rect class="Figuroj_33" id="33_8_B" inkscape:label="33_8_B" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)"></rect>
												<rect class="Figuroj_33" id="33_7_B" inkscape:label="33_7_B" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_B" inkscape:label="33_6_B" width="8" height="13.15" x="212" y="84.849998" rx="4"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_B" inkscape:label="33_5_B" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_B" inkscape:label="33_4_B" width="8" height="13.425003" x="212" y="58" rx="4"></rect>
												<rect class="Figuroj_33" id="33_3_B" inkscape:label="33_3_B" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
												<rect class="Figuroj_33" id="33_2_B" inkscape:label="33_2_B" width="16" height="13.424997" x="196" y="71.425003" rx="5"></rect>
												<rect class="Figuroj_33" id="33_1_B" inkscape:label="33_1_B" width="16" height="13.425" x="196" y="58" rx="5"></rect>
											</g>
											<g class="simboloj_33" id="simboloj_33_B" inkscape:label="simboloj_33_B" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(148.49259,108)">
												<text class="skr-sign s33 gr" id="Gr_B_min" xml:space="preserve" inkscape:label="33_Gr_B_min" style="stroke-dasharray:none" x="222.07777" y="80.364136" transform="scale(0.97203684,1.0287676)">β</text>
												<text class="skr-sign s33 gr" id="Gr_B_may" xml:space="preserve" inkscape:label="33_Gr_B_may" x="215.78831" y="70.133438">Β</text>
												<text class="skr-sign s33 sxa" id="Sxa_B" xml:space="preserve" inkscape:label="33_Sxa_B" x="209.1055" y="91.299667" transform="scale(0.97203684,1.0287676)">𐑚</text>
												<text class="skr-sign s33 lat" id="Lat_B_min" xml:space="preserve" inkscape:label="33_Lat_B_min" x="209.46536" y="80.354668" transform="scale(0.97203684,1.0287676)">b</text>
												<text class="skr-sign s33 lat_may" id="Lat_B_may" xml:space="preserve" inkscape:label="33_Lat_B_may" x="209.50323" y="68.307861" transform="scale(0.97203684,1.0287676)">B</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_B" inkscape:label="22_Figuroj_B" style="display:none" inkscape:highlight-color="#58392b" transform="translate(148.49259,108)" sodipodi:insensitive="true">
												<rect class="Figuroj_22" id="22_4_B" inkscape:label="22_4_B" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_B" inkscape:label="22_3_B" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_B" inkscape:label="22_2_B" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_B" inkscape:label="22_1_B" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="simboloj_22_B" inkscape:label="simboloj_22_B" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(148.49259,108)">
												<text class="skr-sign s22 gr" id="22_Gr_B_min" xml:space="preserve" inkscape:label="22_Gr_B_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">β</text>
												<text class="skr-sign s22 gr" id="22_Gr_B_may" xml:space="preserve" inkscape:label="22_Gr_B_may" x="226.00742" y="72.848473">Β</text>
												<text class="skr-sign s22 lat" id="22_Lat_B_min" xml:space="preserve" inkscape:label="22_Lat_B_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">b</text>
												<text class="skr-sign s22 lat_may" id="22_Lat_B_may" xml:space="preserve" inkscape:label="22_Lat_B_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">B</text>
											</g>
											<g class="Figuroj_group_11" id="g13920" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(148.99258,108)">
												<rect class="Figuroj_11" id="rect13914" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect13916" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect13918" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g13924" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(148.99258,108)">
												<text class="skr-sign s11_sx sxa" id="text13922" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑚</text>
											</g>
										</g>
										<g class="keycap" id="Key_V" transform="translate(15,15)" inkscape:label="Key_V" style="display:inline">
											<rect class="outer border" id="OutB_V" x="284.5" y="163" width="52" height="52" rx="5" inkscape:label="OutB_V"></rect>
											<rect class="outer fill" id="OutF_V" x="284.5" y="163" width="52" height="52" rx="5" inkscape:label="OutF_V"></rect>
											<rect class="inner border" id="InB_V" x="290.5" y="166" width="40" height="40" rx="5" inkscape:label="InB_V"></rect>
											<rect class="inner fill" id="InF_V" x="290.5" y="166" width="40" height="40" rx="5" inkscape:label="InF_V"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_V" inkscape:label="33_Figuroj_V" style="display:none" inkscape:highlight-color="#58392b" transform="translate(94.492589,108)">
												<rect class="Figuroj_33" id="33_9_V" inkscape:label="33_9_V" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
												<rect class="Figuroj_33" id="33_8_V" inkscape:label="33_8_V" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)"></rect>
												<rect class="Figuroj_33" id="33_7_V" inkscape:label="33_7_V" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_V" inkscape:label="33_6_V" width="8" height="13.15" x="212" y="84.849998" rx="4"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_V" inkscape:label="33_5_V" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_V" inkscape:label="33_4_V" width="8" height="13.425003" x="212" y="58" rx="4"></rect>
												<rect class="Figuroj_33" id="33_3_V" inkscape:label="33_3_V" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
												<rect class="Figuroj_33" id="33_2_V" inkscape:label="33_2_V" width="16" height="13.424997" x="196" y="71.425003" rx="5"></rect>
												<rect class="Figuroj_33" id="33_1_V" inkscape:label="33_1_V" width="16" height="13.425" x="196" y="58" rx="5"></rect>
											</g>
											<g class="simboloj_33" id="simboloj_33_V" inkscape:label="simboloj_33_V" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(94.492589,108)">
												<text class="skr-sign s33 gr" id="Gr_V_min" inkscape:label="33_Gr_V_min" xml:space="preserve" style="stroke-dasharray:none" x="222.11403" y="80.364136" transform="scale(0.97203684,1.0287676)">ω</text>
												<text class="skr-sign s33 gr" id="Gr_V_may" inkscape:label="33_Gr_V_may" xml:space="preserve" x="215.90303" y="70.199722">Ω</text>
												<text class="skr-sign s33 sxa" id="Sxa_V" inkscape:label="33_Sxa_V" xml:space="preserve" x="209.31857" y="91.299667" transform="scale(0.97203684,1.0287676)">𐑝</text>
												<text class="skr-sign s33 lat" id="Lat_V_min" inkscape:label="33_Lat_V_min" xml:space="preserve" x="209.48903" y="80.354668" transform="scale(0.97203684,1.0287676)">v</text>
												<text class="skr-sign s33 lat_may" id="Lat_V_may" inkscape:label="33_Lat_V_may" xml:space="preserve" x="209.48903" y="68.307861" transform="scale(0.97203684,1.0287676)">V</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_V" inkscape:label="22_Figuroj_V" style="display:none" inkscape:highlight-color="#58392b" transform="translate(94.49259,108)">
												<rect class="Figuroj_22" id="22_4_V" inkscape:label="22_4_V" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_V" inkscape:label="22_3_V" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_V" inkscape:label="22_2_V" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_V" inkscape:label="22_1_V" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g1644" inkscape:label="simboloj_22_V" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(94.49259,108)">
												<text class="skr-sign s22 gr" id="22_Gr_V_min" xml:space="preserve" inkscape:label="22_Gr_V_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ω</text>
												<text class="skr-sign s22 gr" id="22_Gr_V_may" xml:space="preserve" inkscape:label="22_Gr_V_may" x="226.00742" y="72.848473">Ω</text>
												<text class="skr-sign s22 lat" id="22_Lat_V_min" xml:space="preserve" inkscape:label="22_Lat_V_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">v</text>
												<text class="skr-sign s22 lat_may" id="22_Lat_V_may" xml:space="preserve" inkscape:label="22_Lat_V_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">V</text>
											</g>
											<g class="Figuroj_group_11" id="g13902" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(94.992584,108)">
												<rect class="Figuroj_11" id="rect13896" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect13898" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect13900" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g13906" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(94.992584,108)">
												<text class="skr-sign s11_sx sxa" id="text13904" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑝</text>
											</g>
										</g>
										<g class="keycap" id="Key_C" transform="translate(15,15)" inkscape:label="Key_C" style="display:inline">
											<rect class="outer border" id="OutB_C" x="230.5" y="163" width="52" height="52" rx="5" inkscape:label="OutB_C"></rect>
											<rect class="outer fill" id="OutF_C" x="230.5" y="163" width="52" height="52" rx="5" inkscape:label="OutF_C"></rect>
											<rect class="inner border" id="InB_C" x="236.5" y="166" width="40" height="40" rx="5" inkscape:label="InB_C"></rect>
											<rect class="inner fill" id="InF_C" x="236.5" y="166" width="40" height="40" rx="5" inkscape:label="InF_C"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_C" inkscape:label="33_Figuroj_C" style="display:none" inkscape:highlight-color="#58392b" transform="translate(40.492589,108)">
												<rect class="Figuroj_33" id="33_9_C" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_C"></rect>
												<rect class="Figuroj_33" id="33_8_C" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_C"></rect>
												<rect class="Figuroj_33" id="33_7_C" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_C"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_C" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_C"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_C" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_C"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_C" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_C"></rect>
												<rect class="Figuroj_33" id="33_3_C" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_C"></rect>
												<rect class="Figuroj_33" id="33_2_C" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_C"></rect>
												<rect class="Figuroj_33" id="33_1_C" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_C"></rect>
											</g>
											<g class="simboloj_33" id="simboloj_33_C" inkscape:label="simboloj_33_C" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(40.492589,108)">
												<text class="skr-sign s33 gr" id="Gr_C_min" xml:space="preserve" style="stroke-dasharray:none" x="221.96887" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_C_min">ψ</text>
												<text class="skr-sign s33 gr" id="Gr_C_may" xml:space="preserve" x="215.9276" y="70.133438" inkscape:label="33_Gr_C_may">Ψ</text>
												<text class="skr-sign s33 sxa" id="Sxa_C" xml:space="preserve" x="209.5269" y="93.865944" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_C">𐑔</text>
												<text class="skr-sign s33 lat" id="Lat_C_min" xml:space="preserve" x="209.48903" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_C_min">c</text>
												<text class="skr-sign s33 lat_may" id="Lat_C_may" xml:space="preserve" x="209.48903" y="68.307861" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_C_may">C</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_C" inkscape:label="22_Figuroj_C" style="display:none" inkscape:highlight-color="#58392b" transform="translate(40.49259,108)">
												<rect class="Figuroj_22" id="22_4_C" inkscape:label="22_4_C" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_C" inkscape:label="22_3_C" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_C" inkscape:label="22_2_C" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_C" inkscape:label="22_1_C" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="simboloj_22_C" inkscape:label="simboloj_22_C" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(40.49259,108)">
												<text class="skr-sign s22 gr" id="22_Gr_C_min" xml:space="preserve" inkscape:label="22_Gr_C_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ψ</text>
												<text class="skr-sign s22 gr" id="22_Gr_C_may" xml:space="preserve" inkscape:label="22_Gr_C_may" x="226.00742" y="72.848473">Ψ</text>
												<text class="skr-sign s22 lat" id="22_Lat_C_min" xml:space="preserve" inkscape:label="22_Lat_C_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">c</text>
												<text class="skr-sign s22 lat_may" id="22_Lat_C_may" xml:space="preserve" inkscape:label="22_Lat_C_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">C</text>
											</g>
											<g class="Figuroj_group_11" id="g12631" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(40.992584,108)">
												<rect class="Figuroj_11" id="rect12625" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect12627" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect12629" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g12635" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(40.992584,108)">
												<text class="skr-sign s11_sx sxa" id="text12633" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑔</text>
											</g>
										</g>
										<g class="keycap" id="Key_X" transform="translate(15,15)" inkscape:label="Key_X" style="display:inline">
											<rect class="outer border" id="OutB_X" x="176.5" y="163" width="52" height="52" rx="5" inkscape:label="OutB_X"></rect>
											<rect class="outer fill" id="OutF_X" x="176.5" y="163" width="52" height="52" rx="5" inkscape:label="OutF_X"></rect>
											<rect class="inner border" id="InB_X" x="182.5" y="166" width="40" height="40" rx="5" inkscape:label="InB_X"></rect>
											<rect class="inner fill" id="InF_X" x="182.5" y="166" width="40" height="40" rx="5" inkscape:label="InF_X"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_X" inkscape:label="33_Figuroj_X" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-13.507411,108)">
												<rect class="Figuroj_33" id="33_9_X" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_X"></rect>
												<rect class="Figuroj_33" id="33_8_X" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_X"></rect>
												<rect class="Figuroj_33" id="33_7_X" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_X"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_X" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_X"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_X" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_X"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_X" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_X"></rect>
												<rect class="Figuroj_33" id="33_3_X" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_X"></rect>
												<rect class="Figuroj_33" id="33_2_X" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_X"></rect>
												<rect class="Figuroj_33" id="33_1_X" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_X"></rect>
											</g>
											<g class="simboloj_33" id="simboloj_33_X" inkscape:label="simboloj_33_X" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-13.507411,108)">
												<text class="skr-sign s33 aliaj" id="Alia_X_min" xml:space="preserve" x="234.40749" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_X_min">x</text>
												<text class="skr-sign s33 aliaj" id="Alia_X_may" xml:space="preserve" x="234.4075" y="68.307861" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_X_may">X</text>
												<text class="skr-sign s33 gr" id="33_Gr_X_min" xml:space="preserve" style="stroke-dasharray:none" x="221.78769" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_X_min">χ</text>
												<text class="skr-sign s33 gr" id="33_Gr_X_may" xml:space="preserve" x="215.78831" y="70.133438" inkscape:label="33_Gr_X_may">Χ</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_X" xml:space="preserve" x="209.52692" y="93.922768" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_X">𐑗</text>
												<text class="skr-sign s33 lat" id="33_Lat_X_min" xml:space="preserve" x="209.48903" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_X_min">ĉ</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_X_may" xml:space="preserve" x="209.48903" y="69.699905" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_X_may">Ĉ</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_X" inkscape:label="22_Figuroj_X" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-13.50741,108)">
												<rect class="Figuroj_22" id="22_4_X" inkscape:label="22_4_X" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_X" inkscape:label="22_3_X" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_X" inkscape:label="22_2_X" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_X" inkscape:label="22_1_X" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="simboloj_22_X" inkscape:label="simboloj_22_X" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-13.50741,108)">
												<text class="skr-sign s22 gr" id="22_Gr_X_min" xml:space="preserve" inkscape:label="22_Gr_X_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">χ</text>
												<text class="skr-sign s22 gr" id="22_Gr_X_may" xml:space="preserve" inkscape:label="22_Gr_X_may" x="226.00742" y="72.848473">Χ</text>
												<text class="skr-sign s22 lat" id="22_Lat_X_min" xml:space="preserve" inkscape:label="22_Lat_X_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">ĉ</text>
												<text class="skr-sign s22 lat_may" id="22_Lat_X_may" xml:space="preserve" inkscape:label="22_Lat_X_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">Ĉ</text>
												<text class="skr-sign s22 aliaj" id="text1964" xml:space="preserve" inkscape:label="22_Alia_X_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">x</text>
												<text class="skr-sign s22 aliaj" id="text1966" xml:space="preserve" inkscape:label="22_Alia_X_may" x="226.00742" y="72.848473">X</text>
											</g>
											<g class="Figuroj_group_11" id="g11366" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-13.007416,108)">
												<rect class="Figuroj_11" id="rect11360" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect11362" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect11364" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g11370" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-13.007416,108)">
												<text class="skr-sign s11_sx sxa" id="text11368" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑗</text>
											</g>
										</g>
										<g class="keycap" id="Key_Z" transform="translate(15,15)" inkscape:label="Key_Z" style="display:inline" sodipodi:insensitive="true">
											<rect class="outer border" id="OutB_Z" x="122.5" y="163" width="52" height="52" rx="5" inkscape:label="OutB_Z"></rect>
											<rect class="outer fill" id="OutF_Z" x="122.5" y="163" width="52" height="52" rx="5" inkscape:label="OutF_Z"></rect>
											<rect class="inner border" id="InB_Z" x="128.5" y="166" width="40" height="40" rx="5" inkscape:label="InB_Z"></rect>
											<rect class="inner fill" id="InF_Z" x="128.5" y="166" width="40" height="40" rx="5" inkscape:label="InF_Z"></rect>
											<g class="FR neorigina" id="g3542" inkscape:label="Key_Z_FR(W)" style="display:none" transform="translate(-13.500006,108)">
												<g class="Figuroj_group_33" id="g3488" inkscape:label="33_Figuroj_W" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-54)">
													<rect class="Figuroj_33" id="rect3470" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_W"></rect>
													<rect class="Figuroj_33" id="rect3472" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_W"></rect>
													<rect class="Figuroj_33" id="rect3474" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_W"></rect>
													<rect class="33_Figuroj_Gr" id="rect3476" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_W"></rect>
													<rect class="33_Figuroj_Gr" id="rect3478" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_W"></rect>
													<rect class="33_Figuroj_Gr" id="rect3480" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_W"></rect>
													<rect class="Figuroj_33" id="rect3482" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_W"></rect>
													<rect class="Figuroj_33" id="rect3484" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_W"></rect>
													<rect class="Figuroj_33" id="rect3486" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_W"></rect>
												</g>
												<g class="simboloj_33" id="g3504" inkscape:label="simboloj_33_W" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-54)">
													<text class="skr-sign s33 aliaj" id="text3490" xml:space="preserve" x="234.4075" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_W_min">w</text>
													<text class="skr-sign s33 aliaj" id="text3492" xml:space="preserve" x="234.4075" y="67.130989" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_W_may">W</text>
													<text class="skr-sign s33 gr" id="text3494" xml:space="preserve" style="stroke-dasharray:none" x="222.11403" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_s3_min">ς</text>
													<text class="skr-sign s33 gr" id="text3496" xml:space="preserve" x="215.78831" y="69.565521" inkscape:label="33_Gr_s3_may">ς</text>
													<text class="skr-sign s33 sxa" id="text3498" xml:space="preserve" x="209.47009" y="91.299667" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_W">𐑡</text>
													<text class="skr-sign s33 lat" id="text3500" xml:space="preserve" x="209.64055" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_W_min">ĝ</text>
													<text class="skr-sign s33 lat_may" id="text3502" xml:space="preserve" x="209.48903" y="68.523033" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_W_may">Ĝ</text>
												</g>
												<g class="Figuroj_group_22" id="g3514" inkscape:label="22_Figuroj_W" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-54.00741)">
													<rect class="Figuroj_22" id="rect3506" inkscape:label="22_4_W" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect3508" inkscape:label="22_3_W" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect3510" inkscape:label="22_2_W" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect3512" inkscape:label="22_1_W" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
												</g>
												<g class="simboloj_22" id="g3528" inkscape:label="simboloj_22_W" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-54.00741)">
													<text class="skr-sign s22 gr" id="text3516" xml:space="preserve" inkscape:label="22_Gr_W_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ς</text>
													<text class="skr-sign s22 gr" id="text3518" xml:space="preserve" inkscape:label="22_Gr_W_may" x="226.00742" y="72.848473">ς</text>
													<text class="skr-sign s22 lat" id="text3520" xml:space="preserve" inkscape:label="22_Lat_W_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">ĝ</text>
													<text class="skr-sign s22 lat_may" id="text3522" xml:space="preserve" inkscape:label="22_Lat_W_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">Ĝ</text>
													<text class="skr-sign s22 aliaj" id="text3524" xml:space="preserve" inkscape:label="22_Alia_W_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">w</text>
													<text class="skr-sign s22 aliaj" id="text3526" xml:space="preserve" inkscape:label="22_Alia_W_may" x="226.00742" y="72.848473">W</text>
												</g>
												<g class="Figuroj_group_11" id="g3536" inkscape:label="11_Figuroj_W" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-53.50741)">
													<rect class="Figuroj_11" id="rect3530" inkscape:label="11_3_W" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
													<rect class="Figuroj_11" id="rect3532" inkscape:label="11_2_W" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
													<rect class="Figuroj_11" id="rect3534" inkscape:label="11_1_W" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
												</g>
												<g class="simboloj_11" id="g3540" inkscape:label="simboloj_11_W" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-53.50741)">
													<text class="skr-sign s11_sx sxa" id="text3538" xml:space="preserve" inkscape:label="11_Sxa_W" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑡</text>
												</g>
											</g>
											<g class="neorigina DE" id="g9571" inkscape:label="Key_Z_DE(Y)" style="display:none" transform="translate(-229.5,108)">
												<g class="Figuroj_group_33" id="g9516" inkscape:label="33_Figuroj_Y" style="display:none" inkscape:highlight-color="#58392b" transform="translate(162)">
													<rect class="Figuroj_33" id="rect9498" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_Y"></rect>
													<rect class="Figuroj_33" id="rect9500" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_Y"></rect>
													<rect class="Figuroj_33" id="rect9502" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_Y"></rect>
													<rect class="33_Figuroj_Gr" id="rect9504" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_Y"></rect>
													<rect class="33_Figuroj_Gr" id="rect9506" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_Y"></rect>
													<rect class="33_Figuroj_Gr" id="rect9508" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_Y"></rect>
													<rect class="Figuroj_33" id="rect9510" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_Y"></rect>
													<rect class="Figuroj_33" id="rect9512" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_Y"></rect>
													<rect class="Figuroj_33" id="rect9514" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_Y"></rect>
												</g>
												<g class="simboloj_33" id="g9533" inkscape:label="simboloj_33_Y" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(162)">
													<text class="skr-sign s33 aliaj" id="text9519" xml:space="preserve" x="234.36963" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_Y_min">y</text>
													<text class="skr-sign s33 aliaj" id="text9521" xml:space="preserve" x="234.4075" y="67.130989" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_Y_may">Y</text>
													<text class="skr-sign s33 gr" id="text9523" xml:space="preserve" style="stroke-dasharray:none" x="222.11403" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_Y_min">υ</text>
													<text class="skr-sign s33 gr" id="text9525" xml:space="preserve" x="215.78831" y="68.922707" inkscape:label="33_Gr_Y_may">Υ</text>
													<text class="skr-sign s33 sxa" id="text9527" xml:space="preserve" x="209.47009" y="93.913292" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_Y">𐑘</text>
													<text class="skr-sign s33 lat" id="text9529" xml:space="preserve" x="209.64055" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_Y_min">ŭ</text>
													<text class="skr-sign s33 lat_may" id="text9531" xml:space="preserve" style="font-size:12.3272px;stroke-width:0.951142" x="193.68159" y="72.890213" transform="scale(1.0513701,0.95113983)" inkscape:label="33_Lat_Y_may">Ŭ</text>
												</g>
												<g class="Figuroj_group_22" id="g9543" inkscape:label="22_Figuroj_Y" style="display:none" inkscape:highlight-color="#58392b" transform="translate(161.99259)">
													<rect class="Figuroj_22" id="rect9535" inkscape:label="22_4_Y" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect9537" inkscape:label="22_3_Y" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect9539" inkscape:label="22_2_Y" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect9541" inkscape:label="22_1_Y" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
												</g>
												<g class="simboloj_22" id="g9557" inkscape:label="simboloj_22_Y" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(161.99259)">
													<text class="skr-sign s22 gr" id="text9545" xml:space="preserve" inkscape:label="22_Gr_Y_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">υ</text>
													<text class="skr-sign s22 gr" id="text9547" xml:space="preserve" inkscape:label="22_Gr_Y_may" x="226.00742" y="72.848473">Υ</text>
													<text class="skr-sign s22 lat" id="text9549" xml:space="preserve" inkscape:label="22_Lat_Y_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">ŭ</text>
													<text class="skr-sign s22 lat_may" id="text9551" xml:space="preserve" inkscape:label="22_Lat_Y_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">Ŭ</text>
													<text class="skr-sign s22 aliaj" id="text9553" xml:space="preserve" inkscape:label="22_Alia_Y_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">y</text>
													<text class="skr-sign s22 aliaj" id="text9555" xml:space="preserve" inkscape:label="22_Alia_Y_may" x="226.00742" y="72.848473">Y</text>
												</g>
												<g class="Figuroj_group_11" id="g9565" inkscape:label="11_Figuroj_Y" style="display:none" inkscape:highlight-color="#58392b" transform="translate(162.49259)">
													<rect class="Figuroj_11" id="rect9559" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
													<rect class="Figuroj_11" id="rect9561" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
													<rect class="Figuroj_11" id="rect9563" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
												</g>
												<g class="simboloj_11" id="g9569" inkscape:label="simboloj_11_Y" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(162.49259)">
													<text class="skr-sign s11_sx sxa" id="text9567" xml:space="preserve" inkscape:label="11_Sxa_Y" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑘</text>
												</g>
											</g>
											<g id="Key_Z_Original" inkscape:label="Key_Z_Original" style="display:inline">
												<g class="Figuroj_group_33" id="33_Figuroj_Z" inkscape:label="33_Figuroj_Z" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-67.507411,108)">
													<rect class="Figuroj_33" id="33_9_Z" inkscape:label="33_9_Z" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="33_8_Z" inkscape:label="33_8_Z" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="33_7_Z" inkscape:label="33_7_Z" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="33_Figuroj_Gr" id="33_6_Z" inkscape:label="33_6_Z" width="8" height="13.15" x="212" y="84.849998" rx="4"></rect>
													<rect class="33_Figuroj_Gr" id="33_5_Z" inkscape:label="33_5_Z" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629"></rect>
													<rect class="33_Figuroj_Gr" id="33_4_Z" inkscape:label="33_4_Z" width="8" height="13.425003" x="212" y="58" rx="4"></rect>
													<rect class="Figuroj_33" id="33_3_Z" inkscape:label="33_3_Z" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="33_2_Z" inkscape:label="33_2_Z" width="16" height="13.424997" x="196" y="71.425003" rx="5"></rect>
													<rect class="Figuroj_33" id="33_1_Z" inkscape:label="33_1_Z" width="16" height="13.425" x="196" y="58" rx="5"></rect>
												</g>
												<g class="simboloj_33" id="simboloj_33_Z" inkscape:label="simboloj_33_Z" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-67.507411,108)">
													<text class="skr-sign s33 aliaj sxa" id="text7819" xml:space="preserve" inkscape:label="11_Sxa_Z_aliaj" x="234.63626" y="91.309143" transform="scale(0.97203684,1.0287676)" style="display:inline">𐑞</text>
													<text class="skr-sign s33 gr" id="33_Gr_Z_min" xml:space="preserve" style="display:inline;stroke-dasharray:none" x="222.05284" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_Z_min">ζ</text>
													<text class="skr-sign s33 gr" id="33_Gr_Z_may" xml:space="preserve" x="215.78831" y="70.133438" inkscape:label="33_Gr_Z_may">Ζ</text>
													<text class="skr-sign s33 sxa" id="33_Sxa_Z" xml:space="preserve" x="209.48903" y="91.299667" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_Z">𐑟</text>
													<text class="skr-sign s33 lat" id="33_Lat_Z_min" xml:space="preserve" x="209.43221" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_Z_min">z</text>
													<text class="skr-sign s33 lat_may" id="33_Lat_Z_may" xml:space="preserve" x="209.48903" y="68.307861" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_Z_may">Z</text>
												</g>
												<g class="Figuroj_group_22" id="22_Figuroj_Z" inkscape:label="22_Figuroj_Z" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-67.50741,108)">
													<rect class="Figuroj_22" id="22_4_Z" inkscape:label="22_4_Z" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_3_Z" inkscape:label="22_3_Z" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_2_Z" inkscape:label="22_2_Z" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_1_Z" inkscape:label="22_1_Z" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
												</g>
												<g class="simboloj_22" id="g3619" inkscape:label="simboloj_22_Z" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-67.50741,108)">
													<text class="skr-sign s22 gr" id="text3611" xml:space="preserve" inkscape:label="22_Gr_Z_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ζ</text>
													<text class="skr-sign s22 gr" id="text3613" xml:space="preserve" inkscape:label="22_Gr_Z_may" x="226.00742" y="72.848473">Ζ</text>
													<text class="skr-sign s22 lat" id="text3615" xml:space="preserve" inkscape:label="22_Lat_Z_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">z</text>
													<text class="skr-sign s22 lat_may" id="text3617" xml:space="preserve" inkscape:label="22_Lat_Z_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">Z</text>
												</g>
												<g class="Figuroj_group_11" id="g11348" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-67.007416,108)">
													<rect class="Figuroj_11" id="rect11342" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:none;stroke-width:2"></rect>
													<rect class="Figuroj_11" id="rect11344" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
													<rect class="Figuroj_11" id="rect11346" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
												</g>
												<g class="simboloj_11" id="g11352" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-67.007416,108)">
													<text class="skr-sign s11_al aliaj" id="text2016" xml:space="preserve" inkscape:label="11_Sxa_E_aliaj" x="163.01086" y="195.08409" transform="matrix(0.97203684,0,0,1.0287676,67.007416,-108)" style="display:inline">𐑞</text>
													<text class="skr-sign s11_sx sxa" id="text11537" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑟</text>
												</g>
											</g>
										</g>
										<g class="keycap" id="Key_L" transform="translate(15,15)" inkscape:label="Key_L" style="display:inline">
											<rect class="outer border" id="OutB_L" x="527.5" y="109" width="52" height="52" rx="5" inkscape:label="OutB_L"></rect>
											<rect class="outer fill" id="OutF_L" x="527.5" y="109" width="52" height="52" rx="5" inkscape:label="OutF_L"></rect>
											<rect class="inner border" id="InB_L" x="533.5" y="112" width="40" height="40" rx="5" inkscape:label="InB_L"></rect>
											<rect class="inner fill" id="InF_L" x="533.5" y="112" width="40" height="40" rx="5" inkscape:label="InF_L"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_L" inkscape:label="33_Figuroj_L" style="display:none" inkscape:highlight-color="#58392b" transform="translate(337.5,54)">
												<rect class="Figuroj_33" id="33_9_L" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_L"></rect>
												<rect class="Figuroj_33" id="33_8_L" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_L"></rect>
												<rect class="Figuroj_33" id="33_7_L" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_L"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_L" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_L"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_L" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_L"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_L" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_L"></rect>
												<rect class="Figuroj_33" id="33_3_L" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_L"></rect>
												<rect class="Figuroj_33" id="33_2_L" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_L"></rect>
												<rect class="Figuroj_33" id="33_1_L" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_L"></rect>
											</g>
											<g class="simboloj_33" id="simboloj_33_L" inkscape:label="simboloj_33_L" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(337.5,54)">
												<text class="skr-sign s33 aliaj" id="Alia_L_min" xml:space="preserve" x="234.22757" y="80.340462" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_L_min">ł</text>
												<text class="skr-sign s33 aliaj" id="Alia_L_may" xml:space="preserve" x="234.4075" y="67.746361" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_L_may">Ł</text>
												<text class="skr-sign s33 gr" id="33_Gr_L_min" xml:space="preserve" style="stroke-dasharray:none" x="221.99603" y="80.356735" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_L_min">λ</text>
												<text class="skr-sign s33 gr" id="33_Gr_L_may" xml:space="preserve" x="215.78831" y="69.565521" inkscape:label="33_Gr_L_may">Λ</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_L" xml:space="preserve" x="209.89622" y="92.739059" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_L">𐑤</text>
												<text class="skr-sign s33 lat" id="33_Lat_L_min" xml:space="preserve" x="209.72577" y="80.340462" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_L_min">l</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_L_may" xml:space="preserve" x="209.46062" y="67.755829" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_L_may">L</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_L" inkscape:label="22_Figuroj_L" style="display:none" inkscape:highlight-color="#58392b" transform="translate(337.43979,54)">
												<rect class="Figuroj_22" id="22_4_L" inkscape:label="22_4_L" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_L" inkscape:label="22_3_L" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_L" inkscape:label="22_2_L" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_L" inkscape:label="22_1_L" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g4532" inkscape:label="simboloj_22_L" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(337.43979,54)">
												<text class="skr-sign s22 gr" id="text4524" xml:space="preserve" inkscape:label="22_Gr_L_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">λ</text>
												<text class="skr-sign s22 gr" id="text4526" xml:space="preserve" inkscape:label="22_Gr_L_may" x="226.00742" y="72.848473">Λ</text>
												<text class="skr-sign s22 lat" id="text4528" xml:space="preserve" inkscape:label="22_Lat_L_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">l</text>
												<text class="skr-sign s22 lat_may" id="text4530" xml:space="preserve" inkscape:label="22_Lat_L_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">L</text>
												<text class="skr-sign s22 aliaj" id="text1968" xml:space="preserve" inkscape:label="22_Alia_L_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ł</text>
												<text class="skr-sign s22 aliaj" id="text1970" xml:space="preserve" inkscape:label="22_Alia_L_may" x="226.00742" y="72.848473">Ł</text>
											</g>
											<g class="Figuroj_group_11" id="g11330" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(338.49259,54)">
												<rect class="Figuroj_11" id="rect11324" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect11326" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect11328" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g11334" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(338.49259,54)">
												<text class="skr-sign s11_sx sxa" id="text11332" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑤</text>
											</g>
										</g>
										<g class="keycap" id="Key_K" transform="translate(15,15)" inkscape:label="Key_K" style="display:inline">
											<rect class="outer border" id="OutB_K" x="473.5" y="109" width="52" height="52" rx="5" inkscape:label="OutB_K"></rect>
											<rect class="outer fill" id="OutF_K" x="473.5" y="109" width="52" height="52" rx="5" style="display:inline" inkscape:label="OutF_K"></rect>
											<rect class="inner border" id="InB_K" x="479.5" y="112" width="40" height="40" rx="5" inkscape:label="InB_K"></rect>
											<rect class="inner fill" id="InF_K" x="479.5" y="112" width="40" height="40" rx="5" inkscape:label="InF_K"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_K" inkscape:label="33_Figuroj_K" style="display:none" inkscape:highlight-color="#58392b" transform="translate(283.5,54)">
												<rect class="Figuroj_33" id="33_9_K" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_K"></rect>
												<rect class="Figuroj_33" id="33_8_K" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_K"></rect>
												<rect class="Figuroj_33" id="33_7_K" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_K"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_K" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_K"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_K" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_K"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_K" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_K"></rect>
												<rect class="Figuroj_33" id="33_3_K" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_K"></rect>
												<rect class="Figuroj_33" id="33_2_K" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_K"></rect>
												<rect class="Figuroj_33" id="33_1_K" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_K"></rect>
											</g>
											<g class="simboloj_33" id="simboloj_33_K" inkscape:label="simboloj_33_K" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(283.5,54)">
												<text class="skr-sign s33 gr" id="33_Gr_K_min" xml:space="preserve" style="stroke-dasharray:none" x="222.00801" y="79.128342" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_K_min">κ</text>
												<text class="skr-sign s33 gr" id="33_Gr_K_may" xml:space="preserve" x="215.78831" y="69.565521" inkscape:label="33_Gr_K_may">Κ</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_K" xml:space="preserve" x="210.07614" y="93.951172" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_K">𐑒</text>
												<text class="skr-sign s33 lat" id="33_Lat_K_min" xml:space="preserve" x="209.48903" y="80.340462" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_K_min">k</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_K_may" xml:space="preserve" x="209.48903" y="67.755829" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_K_may">K</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_K" inkscape:label="22_Figuroj_K" style="display:none" inkscape:highlight-color="#58392b" transform="translate(283.43979,54)">
												<rect class="Figuroj_22" id="22_4_K" inkscape:label="22_4_K" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_K" inkscape:label="22_3_K" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_K" inkscape:label="22_2_K" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_K" inkscape:label="22_1_K" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g4616" inkscape:label="simboloj_22_K" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(283.43979,54)">
												<text class="skr-sign s22 gr" id="text4608" xml:space="preserve" inkscape:label="22_Gr_K_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">κ</text>
												<text class="skr-sign s22 gr" id="text4610" xml:space="preserve" inkscape:label="22_Gr_K_may" x="226.00742" y="72.848473">Κ</text>
												<text class="skr-sign s22 lat" id="text4612" xml:space="preserve" inkscape:label="22_Lat_K_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">k</text>
												<text class="skr-sign s22 lat_may" id="text4614" xml:space="preserve" inkscape:label="22_Lat_K_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">K</text>
											</g>
											<g class="Figuroj_group_11" id="g10083" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(284.49259,54)">
												<rect class="Figuroj_11" id="rect10077" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect10079" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect10081" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g10087" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(284.49259,54)">
												<text class="skr-sign s11_sx sxa" id="text10085" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑒</text>
											</g>
										</g>
										<g class="keycap" id="Key_J" transform="translate(15,15)" inkscape:label="Key_J" style="display:inline">
											<rect class="outer border" id="OutB_J" x="419.5" y="109" width="52" height="52" rx="5" inkscape:label="OutB_J"></rect>
											<rect class="outer fill" id="OutF_J" x="419.5" y="109" width="52" height="52" rx="5" inkscape:label="OutF_J"></rect>
											<rect class="inner border" id="InB_J" x="425.5" y="112" width="40" height="40" rx="5" inkscape:label="InB_J"></rect>
											<rect class="inner fill" id="InF_J" x="425.5" y="112" width="40" height="40" rx="5" inkscape:label="InF_J"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_J" inkscape:label="33_Figuroj_J" style="display:none" inkscape:highlight-color="#58392b" transform="translate(229.5,54)">
												<rect class="Figuroj_33" id="33_9_J" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_J"></rect>
												<rect class="Figuroj_33" id="33_8_J" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_J"></rect>
												<rect class="Figuroj_33" id="33_7_J" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_J"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_J" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_J"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_J" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_J"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_J" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_J"></rect>
												<rect class="Figuroj_33" id="33_3_J" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_J"></rect>
												<rect class="Figuroj_33" id="33_2_J" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_J"></rect>
												<rect class="Figuroj_33" id="33_1_J" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_J"></rect>
											</g>
											<g class="simboloj_33" id="g3606" inkscape:label="simboloj_33_J" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(229.5,54)">
												<text class="skr-sign s33 aliaj sxa" id="33_Sxa_Ĵ" xml:space="preserve" x="234.82416" y="91.337547" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_Ĵ">𐑠</text>
												<text class="skr-sign s33 aliaj" id="Alia_J_min" xml:space="preserve" x="234.83363" y="79.223038" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_J_min">ĵ</text>
												<text class="skr-sign s33 aliaj" id="Alia_J_may" xml:space="preserve" x="234.4075" y="67.746361" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_J_may">Ĵ</text>
												<text class="skr-sign s33 gr" id="33_Gr_J_min" xml:space="preserve" style="stroke-dasharray:none" x="221.99603" y="79.118874" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_J_min">ξ</text>
												<text class="skr-sign s33 gr" id="33_Gr_J_may" xml:space="preserve" x="215.78831" y="69.565521" inkscape:label="33_Gr_J_may">Ξ</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_J" xml:space="preserve" x="209.61212" y="91.375427" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_J">𐑢</text>
												<text class="skr-sign s33 lat" id="33_Lat_J_min" xml:space="preserve" x="209.65947" y="79.128342" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_J_min">j</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_J_may" xml:space="preserve" x="209.48903" y="67.755829" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_J_may">J</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_J" inkscape:label="22_Figuroj_J" style="display:none" inkscape:highlight-color="#58392b" transform="translate(229.43979,54)">
												<rect class="Figuroj_22" id="22_4_J" inkscape:label="22_4_J" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_J" inkscape:label="22_3_J" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_J" inkscape:label="22_2_J" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_J" inkscape:label="22_1_J" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g5549" inkscape:label="simboloj_22_J" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(229.43979,54)">
												<text class="skr-sign s22 gr" id="text5541" xml:space="preserve" inkscape:label="22_Gr_J_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ξ</text>
												<text class="skr-sign s22 gr" id="text5543" xml:space="preserve" inkscape:label="22_Gr_J_may" x="226.00742" y="72.848473">Ξ</text>
												<text class="skr-sign s22 lat" id="text5545" xml:space="preserve" inkscape:label="22_Lat_J_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">j</text>
												<text class="skr-sign s22 lat_may" id="text5547" xml:space="preserve" inkscape:label="22_Lat_J_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">J</text>
												<text class="skr-sign s22 aliaj" id="text1972" xml:space="preserve" inkscape:label="22_Alia_J_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ĵ</text>
												<text class="skr-sign s22 aliaj" id="text1974" xml:space="preserve" inkscape:label="22_Alia_J_may" x="226.00742" y="72.848473">Ĵ</text>
											</g>
											<g class="Figuroj_group_11" id="g3826" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(229.99258,54)">
												<rect class="Figuroj_11" id="rect3820" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect3822" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect3824" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g3832" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(229.99258,54)">
												<text class="skr-sign s11_al aliaj" id="text3828" xml:space="preserve" inkscape:label="11_Sxa_E_aliaj" x="232.47032" y="91.205238" transform="scale(0.97203684,1.0287676)">𐑠</text>
												<text class="skr-sign s11_sx sxa" id="text3830" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑢</text>
											</g>
										</g>
										<g class="keycap" id="Key_H" transform="translate(15,15)" inkscape:label="Key_H" style="display:inline">
											<rect class="outer border" id="OutB_H" x="365.5" y="109" width="52" height="52" rx="5" inkscape:label="OutB_H"></rect>
											<rect class="outer fill" id="OutF_H" x="365.5" y="109" width="52" height="52" rx="5" inkscape:label="OutF_H"></rect>
											<rect class="inner border" id="InB_H" x="371.5" y="112" width="40" height="40" rx="5" inkscape:label="InB_H"></rect>
											<rect class="inner fill" id="InF_H" x="371.5" y="112" width="40" height="40" rx="5" inkscape:label="InF_H"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_H" inkscape:label="33_Figuroj_H" style="display:none" inkscape:highlight-color="#58392b" transform="translate(175.5,54)">
												<rect class="Figuroj_33" id="33_9_H" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_H"></rect>
												<rect class="Figuroj_33" id="33_8_H" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_H"></rect>
												<rect class="Figuroj_33" id="33_7_H" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_H"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_H" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_H"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_H" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_H"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_H" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_H"></rect>
												<rect class="Figuroj_33" id="33_3_H" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_H"></rect>
												<rect class="Figuroj_33" id="33_2_H" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_H"></rect>
												<rect class="Figuroj_33" id="33_1_H" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_H"></rect>
											</g>
											<g class="simboloj_33" id="g2636" inkscape:label="simboloj_33_H" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(175.5,54)">
												<text class="skr-sign s33 aliaj sxa" id="33_Sxa_Ĥ" xml:space="preserve" x="234.14688" y="94.017464" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_Ĥ">𐑙</text>
												<text class="skr-sign s33 aliaj" id="Alia_H_min" xml:space="preserve" x="234.88553" y="81.557579" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_H_min">ĥ</text>
												<text class="skr-sign s33 aliaj" id="Alia_H_may" xml:space="preserve" x="234.14688" y="67.746361" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_H_may">Ĥ</text>
												<text class="skr-sign s33 gr" id="33_Gr_H_min" xml:space="preserve" style="stroke-dasharray:none" x="221.99603" y="80.947762" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_H_min">η</text>
												<text class="skr-sign s33 gr" id="33_Gr_H_may" xml:space="preserve" x="215.78831" y="69.565521" inkscape:label="33_Gr_H_may">Η</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_H" xml:space="preserve" x="209.48903" y="91.299667" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_H">𐑣</text>
												<text class="skr-sign s33 lat" id="33_Lat_H_min" xml:space="preserve" x="209.48903" y="81.064087" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_H_min">h</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_H_may" xml:space="preserve" x="209.48903" y="67.755829" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_H_may">H</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_H" inkscape:label="22_Figuroj_H" style="display:none" inkscape:highlight-color="#58392b" transform="translate(175.43979,54)">
												<rect class="Figuroj_22" id="22_4_H" inkscape:label="22_4_H" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_H" inkscape:label="22_3_H" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_H" inkscape:label="22_2_H" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_H" inkscape:label="22_1_H" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g6492" inkscape:label="simboloj_22_H" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(175.43979,54)">
												<text class="skr-sign s22 gr" id="text6484" xml:space="preserve" inkscape:label="22_Gr_H_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">η</text>
												<text class="skr-sign s22 gr" id="text6486" xml:space="preserve" inkscape:label="22_Gr_H_may" x="226.00742" y="72.848473">Η</text>
												<text class="skr-sign s22 lat" id="text6488" xml:space="preserve" inkscape:label="22_Lat_H_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">h</text>
												<text class="skr-sign s22 lat_may" id="text6490" xml:space="preserve" inkscape:label="22_Lat_H_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">H</text>
												<text class="skr-sign s22 aliaj" id="text1976" xml:space="preserve" inkscape:label="22_Alia_H_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ĥ</text>
												<text class="skr-sign s22 aliaj" id="text1978" xml:space="preserve" inkscape:label="22_Alia_H_may" x="226.00742" y="72.848473">Ĥ</text>
											</g>
											<g class="Figuroj_group_11" id="g3805" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(175.99258,54)">
												<rect class="Figuroj_11" id="rect3799" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect3801" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect3803" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g3811" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(175.99258,54)">
												<text class="skr-sign s11_al aliaj" id="text3807" xml:space="preserve" inkscape:label="11_Sxa_E_aliaj" x="232.47032" y="91.205238" transform="scale(0.97203684,1.0287676)">𐑙</text>
												<text class="skr-sign s11_sx sxa" id="text3809" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑣</text>
											</g>
										</g>
										<g class="keycap" id="Key_G" transform="translate(15,15)" inkscape:label="Key_G" style="display:inline">
											<rect class="outer border Key_Greka_Out" id="OutB_G" x="311.5" y="109" width="52" height="52" rx="5" inkscape:label="OutB_G"></rect>
											<rect class="outer fill Key_Greka_Out" id="OutF_G" x="311.5" y="109" width="52" height="52" rx="5" inkscape:label="OutF_G"></rect>
											<rect class="inner border Key_Greka_In" id="InB_G" x="317.5" y="112" width="40" height="40" rx="5" inkscape:label="InB_G"></rect>
											<rect class="inner fill Key_Greka_In" id="InF_G" x="317.5" y="112" width="40" height="40" rx="5" inkscape:label="InF_G"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_G" inkscape:label="33_Figuroj_G" style="display:none" inkscape:highlight-color="#58392b" transform="translate(121.5,54)">
												<rect class="Figuroj_33" id="33_9_G" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_G"></rect>
												<rect class="Figuroj_33" id="33_8_G" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_G"></rect>
												<rect class="Figuroj_33" id="33_7_G" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_G"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_G" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_G"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_G" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_G"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_G" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_G"></rect>
												<rect class="Figuroj_33" id="33_3_G" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_G"></rect>
												<rect class="Figuroj_33" id="33_2_G" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_G"></rect>
												<rect class="Figuroj_33" id="33_1_G" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_G"></rect>
											</g>
											<g class="simboloj_33" id="g2498" inkscape:label="simboloj_33_G" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(121.5,54)">
												<text class="skr-sign s33 gr" id="33_Gr_G_min" xml:space="preserve" style="stroke-dasharray:none" x="222.14354" y="77.764709" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_G">γ</text>
												<text class="skr-sign s33 gr" id="33_Gr_G_may" xml:space="preserve" x="215.66656" y="69.565521" inkscape:label="33_Gr_G_may">Γ</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_G" xml:space="preserve" x="209.29964" y="91.375427" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_G">𐑜</text>
												<text class="skr-sign s33 lat" id="33_Lat_G_min" xml:space="preserve" x="209.64055" y="77.736305" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_G_min">g</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_G_may" xml:space="preserve" x="209.48903" y="67.755829" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_G_may">G</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_G" inkscape:label="22_Figuroj_G" style="display:none" inkscape:highlight-color="#58392b" transform="translate(121.43979,54)">
												<rect class="Figuroj_22" id="22_4_G" inkscape:label="22_4_G" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_G" inkscape:label="22_3_G" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_G" inkscape:label="22_2_G" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_G" inkscape:label="22_1_G" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g6522" inkscape:label="simboloj_22_G" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(121.43979,54)">
												<text class="skr-sign s22 gr" id="text6514" xml:space="preserve" inkscape:label="22_Gr_G_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">γ</text>
												<text class="skr-sign s22 gr" id="text6516" xml:space="preserve" inkscape:label="22_Gr_G_may" x="226.00742" y="72.848473">Γ</text>
												<text class="skr-sign s22 lat" id="text6518" xml:space="preserve" inkscape:label="22_Lat_G_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">g</text>
												<text class="skr-sign s22 lat_may" id="text6520" xml:space="preserve" inkscape:label="22_Lat_G_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">G</text>
											</g>
											<g class="Figuroj_group_11" id="g8842" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(122.49259,54)">
												<rect class="Figuroj_11" id="rect8836" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect8838" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect8840" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g8846" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(122.49259,54)">
												<text class="skr-sign s11_sx sxa" id="text8844" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑜</text>
											</g>
											<text class="skr-sign" id="Key_Greka_text" xml:space="preserve" x="352.56818" y="174.15376" inkscape:label="Greka" style="display:inline" transform="translate(-15,-15)">Greka</text>
										</g>
										<g class="keycap" id="Key_F" transform="translate(15,15)" inkscape:label="Key_F" style="display:inline">
											<rect class="outer border" id="OutB_F" x="257.5" y="109" width="52" height="52" rx="5" inkscape:label="OutB_F"></rect>
											<rect class="outer fill" id="OutF_F" x="257.5" y="109" width="52" height="52" rx="5" inkscape:label="OutF_F"></rect>
											<rect class="inner border" id="InB_F" x="263.5" y="112" width="40" height="40" rx="5" inkscape:label="InB_F"></rect>
											<rect class="inner fill" id="InF_F" x="263.5" y="112" width="40" height="40" rx="5" inkscape:label="InF_F"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_F" inkscape:label="33_Figuroj_F" style="display:none" inkscape:highlight-color="#58392b" transform="translate(67.5,54)">
												<rect class="Figuroj_33" id="33_9_F" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_F"></rect>
												<rect class="Figuroj_33" id="33_8_F" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_F"></rect>
												<rect class="Figuroj_33" id="33_7_F" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_F"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_F" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_F"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_F" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_F"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_F" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_F"></rect>
												<rect class="Figuroj_33" id="33_3_F" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_F"></rect>
												<rect class="Figuroj_33" id="33_2_F" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_F"></rect>
												<rect class="Figuroj_33" id="33_1_F" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_F"></rect>
											</g>
											<g class="simboloj_33" id="g1714" inkscape:label="simboloj_33_F" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(67.5,54)">
												<text class="skr-sign s33 gr" id="33_Gr_F_min" xml:space="preserve" style="stroke-dasharray:none" x="221.99603" y="77.812057" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_F_min">φ</text>
												<text class="skr-sign s33 gr" id="33_Gr_F_may" xml:space="preserve" x="215.78831" y="69.565521" inkscape:label="33_Gr_F_may">Φ</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_F" xml:space="preserve" x="209.82994" y="93.951172" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_F">𐑓</text>
												<text class="skr-sign s33 lat" id="33_Lat_F_min" xml:space="preserve" x="209.58374" y="80.567734" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_F_min">f</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_F_may" xml:space="preserve" x="209.48903" y="67.755829" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_F_may">F</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_F" inkscape:label="22_Figuroj_F" style="display:none" inkscape:highlight-color="#58392b" transform="translate(67.43979,54)">
												<rect class="Figuroj_22" id="22_4_F" inkscape:label="22_4_F" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_F" inkscape:label="22_3_F" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_F" inkscape:label="22_2_F" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_F" inkscape:label="22_1_F" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g6553" inkscape:label="simboloj_22_F" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(67.43979,54)">
												<text class="skr-sign s22 gr" id="text6545" xml:space="preserve" inkscape:label="22_Gr_F_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">φ</text>
												<text class="skr-sign s22 gr" id="text6547" xml:space="preserve" inkscape:label="22_Gr_F_may" x="226.00742" y="72.848473">Φ</text>
												<text class="skr-sign s22 lat" id="text6549" xml:space="preserve" inkscape:label="22_Lat_F_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">f</text>
												<text class="skr-sign s22 lat_may" id="text6551" xml:space="preserve" inkscape:label="22_Lat_F_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">F</text>
											</g>
											<g class="Figuroj_group_11" id="g8824" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(68.49259,54)">
												<rect class="Figuroj_11" id="rect8818" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect8820" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect8822" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g8828" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(68.49259,54)">
												<text class="skr-sign s11_sx sxa" id="text8826" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑓</text>
											</g>
										</g>
										<g class="keycap" id="Key_D" transform="translate(15,15)" inkscape:label="Key_D" style="display:inline">
											<rect class="outer border" id="OutB_D" x="203.5" y="109" width="52" height="52" rx="5" inkscape:label="OutB_D"></rect>
											<rect class="outer fill" id="OutF_D" x="203.5" y="109" width="52" height="52" rx="5" inkscape:label="OutF_D"></rect>
											<rect class="inner border" id="InB_D" x="209.5" y="112" width="40" height="40" rx="5" inkscape:label="InB_D"></rect>
											<rect class="inner fill" id="InF_D" x="209.5" y="112" width="40" height="40" rx="5" inkscape:label="InF_D"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_D" inkscape:label="33_Figuroj_D" style="display:none" inkscape:highlight-color="#58392b" transform="translate(13.5,54)">
												<rect class="Figuroj_33" id="33_9_D" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_D"></rect>
												<rect class="Figuroj_33" id="33_8_D" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_D"></rect>
												<rect class="Figuroj_33" id="33_7_D" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_D"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_D" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_D"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_D" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_D"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_D" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_D"></rect>
												<rect class="Figuroj_33" id="33_3_D" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_D"></rect>
												<rect class="Figuroj_33" id="33_2_D" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_D"></rect>
												<rect class="Figuroj_33" id="33_1_D" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_D"></rect>
											</g>
											<g class="simboloj_33" id="g1490" inkscape:label="simboloj_33_D" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(13.5,54)">
												<text class="skr-sign s33 aliaj" id="Alia_D_min" xml:space="preserve" x="233.8488" y="80.567734" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_D_min">ð</text>
												<text class="skr-sign s33 aliaj" id="Alia_D_may" xml:space="preserve" x="234.4075" y="67.746361" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_D_may">Ð</text>
												<text class="skr-sign s33 gr" id="33_Gr_D_min" xml:space="preserve" style="stroke-dasharray:none" x="221.98656" y="80.496712" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_D_min">δ</text>
												<text class="skr-sign s33 gr" id="33_Gr_D_may" xml:space="preserve" x="215.78831" y="69.565521" inkscape:label="33_Gr_D_may">Δ</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_D" xml:space="preserve" x="209.50797" y="91.370689" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_D">𐑛</text>
												<text class="skr-sign s33 lat" id="33_Lat_D_min" xml:space="preserve" x="209.92464" y="80.264702" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_D_min">d</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_D_may" xml:space="preserve" x="209.48903" y="67.755829" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_D_may">D</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_D" inkscape:label="22_Figuroj_D" style="display:none" inkscape:highlight-color="#58392b" transform="translate(13.43979,54)">
												<rect class="Figuroj_22" id="22_4_D" inkscape:label="22_4_D" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_D" inkscape:label="22_3_D" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_D" inkscape:label="22_2_D" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_D" inkscape:label="22_1_D" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g6583" inkscape:label="simboloj_22_D" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(13.43979,54)">
												<text class="skr-sign s22 gr" id="text6575" xml:space="preserve" inkscape:label="22_Gr_D_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">δ</text>
												<text class="skr-sign s22 gr" id="text6577" xml:space="preserve" inkscape:label="22_Gr_D_may" x="226.00742" y="72.848473">Δ</text>
												<text class="skr-sign s22 lat" id="text6579" xml:space="preserve" inkscape:label="22_Lat_D_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">d</text>
												<text class="skr-sign s22 lat_may" id="text6581" xml:space="preserve" inkscape:label="22_Lat_D_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">D</text>
												<text class="skr-sign s22 aliaj" id="text1980" xml:space="preserve" inkscape:label="22_Alia_D_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ð</text>
												<text class="skr-sign s22 aliaj" id="text1982" xml:space="preserve" inkscape:label="22_Alia_D_may" x="226.00742" y="72.848473">Ð</text>
											</g>
											<g class="Figuroj_group_11" id="g7595" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(14.49259,54)">
												<rect class="Figuroj_11" id="rect7589" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect7591" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect7593" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g7599" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(14.49259,54)">
												<text class="skr-sign s11_sx sxa" id="text7597" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑛</text>
											</g>
										</g>
										<g class="keycap" id="Key_S" transform="translate(15,15)" inkscape:label="Key_S" style="display:inline">
											<rect class="outer border" id="rect499" x="149.5" y="109" width="52" height="52" rx="5" inkscape:label="OutB_M"></rect>
											<rect class="outer fill" id="rect501" x="149.5" y="109" width="52" height="52" rx="5" inkscape:label="OutF_M"></rect>
											<rect class="inner border" id="rect503" x="155.5" y="112" width="40" height="40" rx="5" inkscape:label="InB_M"></rect>
											<rect class="inner fill" id="rect505" x="155.5" y="112" width="40" height="40" rx="5" inkscape:label="InF_M"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_S" inkscape:label="33_Figuroj_S" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-40.5,54)">
												<rect class="Figuroj_33" id="33_9_S" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_S"></rect>
												<rect class="Figuroj_33" id="33_8_S" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_S"></rect>
												<rect class="Figuroj_33" id="33_7_S" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_S"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_S" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_S"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_S" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_S"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_S" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_S"></rect>
												<rect class="Figuroj_33" id="33_3_S" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_S"></rect>
												<rect class="Figuroj_33" id="33_2_S" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_S"></rect>
												<rect class="Figuroj_33" id="33_1_S" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_S"></rect>
											</g>
											<g class="simboloj_33" id="g14061" inkscape:label="simboloj_33_S" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-40.5,54)">
												<text class="skr-sign s33 aliaj" id="Alia_S_min" xml:space="preserve" x="234.4075" y="80.406754" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_S_min">ß</text>
												<text class="skr-sign s33 aliaj" id="Alia_S_may" xml:space="preserve" x="234.4075" y="67.746361" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_S_may">ẞ</text>
												<text class="skr-sign s33 gr" id="33_Gr_S_min" xml:space="preserve" style="stroke-dasharray:none" x="222.05444" y="78.948418" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_S_min">σ</text>
												<text class="skr-sign s33 gr" id="33_Gr_S_may" xml:space="preserve" x="215.84509" y="69.565521" inkscape:label="33_Gr_S_may">Σ</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_S" xml:space="preserve" x="209.48901" y="93.951172" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_S">𐑕</text>
												<text class="skr-sign s33 lat" id="33_Lat_S_min" xml:space="preserve" x="209.47009" y="79.099937" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_S_min">s</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_S_may" xml:space="preserve" x="209.48903" y="67.755829" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_S_may">S</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_S" inkscape:label="22_Figuroj_S" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-40.56021,54)">
												<rect class="Figuroj_22" id="22_4_S" inkscape:label="22_4_S" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_S" inkscape:label="22_3_S" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_S" inkscape:label="22_2_S" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_S" inkscape:label="22_1_S" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g6613" inkscape:label="simboloj_22_S" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-40.56021,54)">
												<text class="skr-sign s22 gr" id="text6605" xml:space="preserve" inkscape:label="22_Gr_S_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">σ</text>
												<text class="skr-sign s22 gr" id="text6607" xml:space="preserve" inkscape:label="22_Gr_S_may" x="226.00742" y="72.848473">Σ</text>
												<text class="skr-sign s22 lat" id="text6609" xml:space="preserve" inkscape:label="22_Lat_S_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">s</text>
												<text class="skr-sign s22 lat_may" id="text6611" xml:space="preserve" inkscape:label="22_Lat_S_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">S</text>
												<text class="skr-sign s22 aliaj" id="text3069" xml:space="preserve" inkscape:label="22_Alia_S_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ß</text>
												<text class="skr-sign s22 aliaj" id="text3071" xml:space="preserve" inkscape:label="22_Alia_S_may" x="226.00742" y="72.848473">ẞ</text>
											</g>
											<g class="Figuroj_group_11" id="g6369" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-39.50741,54)">
												<rect class="Figuroj_11" id="rect6363" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect6365" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect6367" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g6375" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-39.50741,54)">
												<text class="skr-sign s11_sx sxa" id="text6373" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑕</text>
											</g>
										</g>
										<g class="keycap" id="Key_A" transform="translate(-25.413223,68.950414)" inkscape:label="Key_A" style="display:inline">
											<rect class="outer border" id="OutB_A" x="136" y="55" width="52" height="52" rx="5" inkscape:label="OutB_A"></rect>
											<rect class="outer fill" id="OutF_A" x="136" y="55" width="52" height="52" rx="5" style="display:inline" inkscape:label="OutF_A"></rect>
											<rect class="inner border" id="InB_A" x="142" y="58" width="40" height="40" rx="5" inkscape:label="InB_A"></rect>
											<rect class="inner fill" id="InF_A" x="142" y="58" width="40" height="40" rx="5" inkscape:label="InF_A"></rect>
											<g class="qwerty" id="Key_A_Original" inkscape:label="Key_A_Original">
												<g class="Figuroj_group_33" id="33_Figuroj_A" inkscape:label="33_Figuroj_A" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-53.959001,0.049586)">
													<rect class="Figuroj_33" id="33_9_A" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_A"></rect>
													<rect class="Figuroj_33" id="33_8_A" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_A"></rect>
													<rect class="Figuroj_33" id="33_7_A" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_A"></rect>
													<rect class="33_Figuroj_Gr" id="33_6_A" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_A"></rect>
													<rect class="33_Figuroj_Gr" id="33_5_A" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_A"></rect>
													<rect class="33_Figuroj_Gr" id="33_4_A" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_A"></rect>
													<rect class="Figuroj_33" id="33_3_A" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_A"></rect>
													<rect class="Figuroj_33" id="33_2_A" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_A"></rect>
													<rect class="Figuroj_33" id="33_1_A" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_A"></rect>
												</g>
												<g class="simboloj_33" id="simboloj_33_A" inkscape:label="simboloj_33_A" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-53.959001,0.049586)">
													<text class="skr-sign s33 aliaj sxa" id="33_Sxa_Au" xml:space="preserve" x="234.31281" y="92.739059" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_Au">𐑲</text>
													<text class="skr-sign s33 aliaj" id="Alia_A_min" xml:space="preserve" x="234.14235" y="79.090469" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_A_min">æ</text>
													<text class="skr-sign s33 aliaj" id="Alia_A_may" xml:space="preserve" x="234.4075" y="67.746361" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_A_may">Æ</text>
													<text class="skr-sign s33 gr" id="33_Gr_A_min" xml:space="preserve" style="stroke-dasharray:none" x="221.99603" y="79.099846" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_A_min">α</text>
													<text class="skr-sign s33 gr" id="33_Gr_A_may" xml:space="preserve" x="215.78831" y="69.565521" inkscape:label="33_Gr_A_may">Α</text>
													<text class="skr-sign s33 sxa" id="33_Sxa_A" xml:space="preserve" x="209.65948" y="92.739059" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_A">𐑨</text>
													<text class="skr-sign s33 lat" id="33_Lat_A_min" xml:space="preserve" x="209.65948" y="79.0952" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_A_min">a</text>
													<text class="skr-sign s33 lat_may" id="33_Lat_A_may" xml:space="preserve" x="209.48903" y="67.755829" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_A_may">A</text>
												</g>
												<g class="Figuroj_group_22" id="22_Figuroj_A" inkscape:label="22_Figuroj_A" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-54.146987,0.049586)">
													<rect class="Figuroj_22" id="22_4_A" inkscape:label="22_4_A" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_3_A" inkscape:label="22_3_A" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_2_A" inkscape:label="22_2_A" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_1_A" inkscape:label="22_1_A" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
												</g>
												<g class="simboloj_22" id="g6643" inkscape:label="simboloj_22_A" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-54.146987,0.049586)">
													<text class="skr-sign s22 gr" id="text6635" xml:space="preserve" inkscape:label="22_Gr_A_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">α</text>
													<text class="skr-sign s22 gr" id="text6637" xml:space="preserve" inkscape:label="22_Gr_A_may" x="226.00742" y="72.848473">Α</text>
													<text class="skr-sign s22 lat" id="text6639" xml:space="preserve" inkscape:label="22_Lat_A_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">a</text>
													<text class="skr-sign s22 lat_may" id="text6641" xml:space="preserve" inkscape:label="22_Lat_A_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">A</text>
													<text class="skr-sign s22 aliaj" id="text4160" xml:space="preserve" inkscape:label="22_Alia_A_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">æ</text>
													<text class="skr-sign s22 aliaj" id="text4162" xml:space="preserve" inkscape:label="22_Alia_A_may" x="226.00742" y="72.848473">Æ</text>
												</g>
												<g class="Figuroj_group_11" id="g2634" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-53.094187,0.049586)">
													<rect class="Figuroj_11" id="rect2628" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
													<rect class="Figuroj_11" id="rect2630" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
													<rect class="Figuroj_11" id="rect2632" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
												</g>
												<g class="simboloj_11" id="g2640" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-53.094187,0.049586)">
													<text class="skr-sign s11_al aliaj" id="text2636" xml:space="preserve" inkscape:label="11_Sxa_E_aliaj" x="232.47032" y="91.205238" transform="scale(0.97203684,1.0287676)">𐑲</text>
													<text class="skr-sign s11_sx sxa" id="text2638" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑨</text>
												</g>
											</g>
											<g class="FR neorigina" id="Key_A_FR(Q)" style="display:none" transform="translate(25.491824,-69.53456)" inkscape:label="Key_A_FR(Q)">
												<g class="Figuroj_group_33" id="g5035" inkscape:label="33_Figuroj_Q" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-79.500006,69.583851)">
													<rect class="Figuroj_33" id="rect5017" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_Q"></rect>
													<rect class="Figuroj_33" id="rect5019" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_Q"></rect>
													<rect class="Figuroj_33" id="rect5021" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_Q"></rect>
													<rect class="33_Figuroj_Gr" id="rect5023" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_Q"></rect>
													<rect class="33_Figuroj_Gr" id="rect5025" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_Q"></rect>
													<rect class="33_Figuroj_Gr" id="rect5027" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_Q"></rect>
													<rect class="Figuroj_33" id="rect5029" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_Q"></rect>
													<rect class="Figuroj_33" id="rect5031" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_Q"></rect>
													<rect class="Figuroj_33" id="rect5033" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_Q"></rect>
												</g>
												<g class="simboloj_33" id="g5051" inkscape:label="simboloj_33_Q" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-79.500006,69.583851)">
													<text class="skr-sign s33 aliaj" id="text5037" xml:space="preserve" x="234.57796" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_Q_min">q</text>
													<text class="skr-sign s33 aliaj" id="text5039" xml:space="preserve" x="234.4075" y="66.742729" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_Q_may">Q</text>
													<text class="skr-sign s33 gr" id="text5041" xml:space="preserve" style="stroke-dasharray:none" x="222.04277" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_Q_min">·</text>
													<text class="skr-sign s33 gr" id="text5043" xml:space="preserve" x="215.83376" y="69.565521" inkscape:label="33_Gr_Q_may">·</text>
													<text class="skr-sign s33 sxa" id="text5045" xml:space="preserve" x="209.48903" y="93.979584" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_Q">𐑖</text>
													<text class="skr-sign s33 lat" id="text5047" xml:space="preserve" x="209.47009" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_Q_min">ŝ</text>
													<text class="skr-sign s33 lat_may" id="text5049" xml:space="preserve" style="stroke-width:0.963352" x="196.16791" y="72.73349" transform="scale(1.0380447,0.96334965)" inkscape:label="33_Lat_Q_may">Ŝ</text>
												</g>
												<g class="Figuroj_group_22" id="g5061" inkscape:label="22_Figuroj_Q" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-79.507416,69.583851)">
													<rect class="Figuroj_22" id="rect5053" inkscape:label="22_4_Q" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect5055" inkscape:label="22_3_Q" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect5057" inkscape:label="22_2_Q" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect5059" inkscape:label="22_1_Q" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
												</g>
												<g class="simboloj_22" id="g5075" inkscape:label="simboloj_22_Q_FR" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-79.507416,69.583851)">
													<text class="skr-sign s22 gr" id="text5063" xml:space="preserve" inkscape:label="22_Gr_Q_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">·</text>
													<text class="skr-sign s22 gr" id="text5065" xml:space="preserve" inkscape:label="22_Gr_Q_may" x="226.00742" y="72.848473">·</text>
													<text class="skr-sign s22 lat" id="text5067" xml:space="preserve" inkscape:label="22_Lat_Q_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">ŝ</text>
													<text class="skr-sign s22 lat_may" id="text5069" xml:space="preserve" inkscape:label="22_Lat_Q_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">Ŝ</text>
													<text class="skr-sign s22 aliaj" id="text5071" xml:space="preserve" inkscape:label="22_Alia_Q_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">q</text>
													<text class="skr-sign s22 aliaj" id="text5073" xml:space="preserve" inkscape:label="22_Alia_Q_may" x="226.00742" y="72.848473">Q</text>
												</g>
												<g class="Figuroj_group_11" id="g5083" inkscape:label="11_Figuroj_Q_FR" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-79.007416,69.583851)">
													<rect class="Figuroj_11" id="rect5077" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
													<rect class="Figuroj_11" id="rect5079" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
													<rect class="Figuroj_11" id="rect5081" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
												</g>
												<g class="simboloj_11" id="g5087" inkscape:label="simboloj_11_Q_FR" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-79.007416,69.583851)">
													<text class="skr-sign s11_sx sxa" id="text5085" xml:space="preserve" inkscape:label="11_Sxa_Q_FR" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑖</text>
												</g>
											</g>
										</g>
										<g class="keycap" id="Key_P" transform="translate(15,15)" inkscape:label="Key_P" style="display:inline">
											<rect class="outer border" id="OutB_O" x="568" y="55" width="52" height="52" rx="5" inkscape:label="OutB_O"></rect>
											<rect class="outer fill" id="OutF_O" x="568" y="55" width="52" height="52" rx="5" inkscape:label="OutF_O"></rect>
											<rect class="inner border" id="InB_O" x="574" y="58" width="40" height="40" rx="5" inkscape:label="InB_O"></rect>
											<rect class="inner fill" id="InF_O" x="574" y="58" width="40" height="40" rx="5" inkscape:label="InF_O"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_P" inkscape:label="33_Figuroj_P" style="display:none" inkscape:highlight-color="#58392b" transform="translate(378)">
												<rect class="Figuroj_33" id="33_9_P" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_P"></rect>
												<rect class="Figuroj_33" id="33_8_P" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_P"></rect>
												<rect class="Figuroj_33" id="33_7_P" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_P"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_P" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_P"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_P" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_P"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_P" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_P"></rect>
												<rect class="Figuroj_33" id="33_3_P" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_P"></rect>
												<rect class="Figuroj_33" id="33_2_P" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_P"></rect>
												<rect class="Figuroj_33" id="33_1_P" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_P"></rect>
											</g>
											<g class="simboloj_33" id="g12658" inkscape:label="simboloj_33_P" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(378)">
												<text class="skr-sign s33 gr" id="33_Gr_P_min" xml:space="preserve" style="stroke-dasharray:none" x="222.11403" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_P_min">π</text>
												<text class="skr-sign s33 gr" id="33_Gr_P_may" xml:space="preserve" x="215.78831" y="68.922707" inkscape:label="33_Gr_P_may">Π</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_P" xml:space="preserve" x="209.47009" y="93.913292" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_P">𐑐</text>
												<text class="skr-sign s33 lat" id="33_Lat_P_min" xml:space="preserve" x="209.64055" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_P_min">p</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_P_may" xml:space="preserve" x="209.48903" y="67.130989" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_P_may">P</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_P" inkscape:label="22_Figuroj_P" style="display:none" inkscape:highlight-color="#58392b" transform="translate(377.99259)">
												<rect class="Figuroj_22" id="22_4_P" inkscape:label="22_4_P" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_P" inkscape:label="22_3_P" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_P" inkscape:label="22_2_P" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_P" inkscape:label="22_1_P" width="19.999994" height="20" x="196.00742" y="60" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g7646" inkscape:label="simboloj_22_P" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(377.99259)">
												<text class="skr-sign s22 gr" id="text7638" xml:space="preserve" inkscape:label="22_Gr_P_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">π</text>
												<text class="skr-sign s22 gr" id="text7640" xml:space="preserve" inkscape:label="22_Gr_P_may" x="226.00742" y="72.848473">Π</text>
												<text class="skr-sign s22 lat" id="text7642" xml:space="preserve" inkscape:label="22_Lat_P_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">p</text>
												<text class="skr-sign s22 lat_may" id="text7644" xml:space="preserve" inkscape:label="22_Lat_P_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">P</text>
											</g>
											<g class="Figuroj_group_11" id="g5152" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(378.49259)">
												<rect class="Figuroj_11" id="rect5146" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect5148" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect5150" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g5156" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(378.49259)">
												<text class="skr-sign s11_sx sxa" id="text5154" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑐</text>
											</g>
										</g>
										<g class="keycap" id="Key_O" transform="translate(15,15)" inkscape:label="Key_O" style="display:inline">
											<rect class="outer border" id="rect605" x="514" y="55" width="52" height="52" rx="5" inkscape:label="OutB_O"></rect>
											<rect class="outer fill" id="rect607" x="514" y="55" width="52" height="52" rx="5" inkscape:label="OutF_O"></rect>
											<rect class="inner border" id="rect609" x="520" y="58" width="40" height="40" rx="5" inkscape:label="InB_O"></rect>
											<rect class="inner fill" id="rect611" x="520" y="58" width="40" height="40" rx="5" inkscape:label="InF_O"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_O" inkscape:label="33_Figuroj_O" style="display:none" inkscape:highlight-color="#58392b" transform="translate(324)">
												<rect class="Figuroj_33" id="33_9_O" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_O"></rect>
												<rect class="Figuroj_33" id="33_8_O" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_O"></rect>
												<rect class="Figuroj_33" id="33_7_O" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_O"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_O" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_O"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_O" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_O"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_O" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_O"></rect>
												<rect class="Figuroj_33" id="33_3_O" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_O"></rect>
												<rect class="Figuroj_33" id="33_2_O" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_O"></rect>
												<rect class="Figuroj_33" id="33_1_O" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_O"></rect>
											</g>
											<g class="simboloj_33" id="g11401" inkscape:label="simboloj_33_O" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(324)">
												<text class="skr-sign s33 aliaj sxa" id="33_Sxa_On" xml:space="preserve" x="234.23729" y="92.70118" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_On">𐑳</text>
												<text class="skr-sign s33 aliaj" id="Alia_O_min" xml:space="preserve" x="234.36963" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_O_min">œ</text>
												<text class="skr-sign s33 aliaj" id="Alia_O_may" xml:space="preserve" x="234.4075" y="67.130989" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_O_may">Œ</text>
												<text class="skr-sign s33 gr" id="33_Gr_O_min" xml:space="preserve" style="stroke-dasharray:none" x="222.11403" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_O_min">ο</text>
												<text class="skr-sign s33 gr" id="33_Gr_O_may" xml:space="preserve" x="215.78831" y="68.922707" inkscape:label="33_Gr_O_may">Ο</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_O" xml:space="preserve" x="209.47009" y="92.70118" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_O">𐑩</text>
												<text class="skr-sign s33 lat" id="33_Lat_O_min" xml:space="preserve" x="209.64055" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_O_min">o</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_O_may" xml:space="preserve" x="209.48903" y="67.130989" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_O_may">O</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_O" inkscape:label="22_Figuroj_O" style="display:none" inkscape:highlight-color="#58392b" transform="translate(323.99259)">
												<rect class="Figuroj_22" id="22_4_O" inkscape:label="22_4_O" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_O" inkscape:label="22_3_O" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_O" inkscape:label="22_2_O" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_O" inkscape:label="22_1_O" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g7676" inkscape:label="simboloj_22_O" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(323.99259)">
												<text class="skr-sign s22 gr" id="text7668" xml:space="preserve" inkscape:label="22_Gr_O_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ο</text>
												<text class="skr-sign s22 gr" id="text7670" xml:space="preserve" inkscape:label="22_Gr_O_may" x="226.00742" y="72.848473">Ο</text>
												<text class="skr-sign s22 lat" id="text7672" xml:space="preserve" inkscape:label="22_Lat_O_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">o</text>
												<text class="skr-sign s22 lat_may" id="text7674" xml:space="preserve" inkscape:label="22_Lat_O_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">O</text>
												<text class="skr-sign s22 aliaj" id="text4164" xml:space="preserve" inkscape:label="22_Alia_O_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">œ</text>
												<text class="skr-sign s22 aliaj" id="text4166" xml:space="preserve" inkscape:label="22_Alia_O_may" x="226.00742" y="72.848473">Œ</text>
											</g>
											<g class="Figuroj_group_11" id="g2613" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(324.49259)">
												<rect class="Figuroj_11" id="rect2607" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect2609" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect2611" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g2619" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(324.49259)">
												<text class="skr-sign s11_al aliaj" id="text2615" xml:space="preserve" inkscape:label="11_Sxa_E_aliaj" x="232.47032" y="91.205238" transform="scale(0.97203684,1.0287676)">𐑳</text>
												<text class="skr-sign s11_sx sxa" id="text2617" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑩</text>
											</g>
										</g>
										<g class="keycap" id="Key_I" transform="translate(15,15)" inkscape:label="Key_I" style="display:inline">
											<rect class="outer border" id="OutB_I" x="460" y="55" width="52" height="52" rx="5" inkscape:label="OutB_I"></rect>
											<rect class="outer fill" id="OutF_I" x="460" y="55" width="52" height="52" rx="5" inkscape:label="OutF_I"></rect>
											<rect class="inner border" id="InB_I" x="466" y="58" width="40" height="40" rx="5" inkscape:label="InB_I"></rect>
											<rect class="inner fill" id="InF_I" x="466" y="58" width="40" height="40" rx="5" inkscape:label="InF_I"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_I" inkscape:label="33_Figuroj_I" style="display:none" inkscape:highlight-color="#58392b" transform="translate(270)">
												<rect class="Figuroj_33" id="33_9_I" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_I"></rect>
												<rect class="Figuroj_33" id="33_8_I" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_I"></rect>
												<rect class="Figuroj_33" id="33_7_I" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_I"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_I" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_I"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_I" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_I"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_I" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_I"></rect>
												<rect class="Figuroj_33" id="33_3_I" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_I"></rect>
												<rect class="Figuroj_33" id="33_2_I" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_I"></rect>
												<rect class="Figuroj_33" id="33_1_I" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_I"></rect>
											</g>
											<g class="simboloj_33" id="g8980" inkscape:label="simboloj_33_I" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(270)">
												<text class="skr-sign s33 aliaj sxa" id="Alia_I" xml:space="preserve" x="234.2372" y="92.70118" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_I">𐑰</text>
												<text class="skr-sign s33 aliaj" id="Alia_I_min" xml:space="preserve" x="234.36963" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_I_min">ı</text>
												<text class="skr-sign s33 aliaj" id="Alia_I_may" xml:space="preserve" style="font-size:12.5413px;stroke-width:0.967658" x="220.48306" y="72.059029" transform="scale(1.0334251,0.96765601)" inkscape:label="Alia_I_may">İ</text>
												<text class="skr-sign s33 gr" id="33_Gr_I_min" xml:space="preserve" style="stroke-dasharray:none" x="222.11403" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_I_min">ι</text>
												<text class="skr-sign s33 gr" id="33_Gr_I_may" xml:space="preserve" style="font-size:12.7714px;stroke-width:0.957857" x="206.69437" y="71.53746" inkscape:label="33_Gr_I_may" transform="scale(1.0439971,0.95785709)">Ι</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_I" xml:space="preserve" x="209.47009" y="92.70118" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_I">𐑦</text>
												<text class="skr-sign s33 lat" id="33_Lat_I_min" xml:space="preserve" x="209.64055" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_I_min">i</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_I_may" xml:space="preserve" x="201.0928" y="69.53714" transform="scale(1.0126223,0.98753503)" inkscape:label="33_Lat_I_may">I</text>
											</g>
											<g class="Figuroj_group_22" id="g646" inkscape:label="22_Figuroj_J" style="display:none" inkscape:highlight-color="#58392b" transform="translate(269.99259)">
												<rect class="Figuroj_22" id="22_4_I" inkscape:label="22_4_I" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_I" inkscape:label="22_3_I" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_I" inkscape:label="22_2_I" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_I" inkscape:label="22_1_I" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g7736" inkscape:label="simboloj_22_I" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(269.99259)">
												<text class="skr-sign s22 gr" id="text7728" xml:space="preserve" inkscape:label="22_Gr_I_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ι</text>
												<text class="skr-sign s22 gr" id="text7730" xml:space="preserve" inkscape:label="22_Gr_I_may" x="226.00742" y="72.848473">Ι</text>
												<text class="skr-sign s22 lat" id="text7732" xml:space="preserve" inkscape:label="22_Lat_I_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">i</text>
												<text class="skr-sign s22 lat_may" id="text7734" xml:space="preserve" inkscape:label="22_Lat_I_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">I</text>
												<text class="skr-sign s22 aliaj" id="text4168" xml:space="preserve" inkscape:label="22_Alia_I_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ı</text>
												<text class="skr-sign s22 aliaj" id="text4170" xml:space="preserve" inkscape:label="22_Alia_I_may" x="226.00742" y="72.848473">İ</text>
											</g>
											<g class="Figuroj_group_11" id="g1457" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(270.49259)">
												<rect class="Figuroj_11" id="rect1451" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect1453" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect1455" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g1463" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(270.49259)">
												<text class="skr-sign s11_al aliaj" id="text1459" xml:space="preserve" inkscape:label="11_Sxa_E_aliaj" x="232.47032" y="91.205238" transform="scale(0.97203684,1.0287676)">𐑰</text>
												<text class="skr-sign s11_sx sxa" id="text1461" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑦</text>
											</g>
										</g>
										<g class="keycap" id="Key_U" transform="translate(15,15)" inkscape:label="Key_U" style="display:inline">
											<rect class="outer border" id="OutB_U" x="406" y="55" width="52" height="52" rx="5" inkscape:label="OutB_U"></rect>
											<rect class="outer fill" id="OutF_U" x="406" y="55" width="52" height="52" rx="5" inkscape:label="OutF_U"></rect>
											<rect class="inner border" id="InB_U" x="412" y="58" width="40" height="40" rx="5" inkscape:label="InB_U"></rect>
											<rect class="inner fill" id="InF_U" x="412" y="58" width="40" height="40" rx="5" inkscape:label="InF_U"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_U" inkscape:label="33_Figuroj_U" style="display:none" inkscape:highlight-color="#58392b" transform="translate(216)">
												<rect class="Figuroj_33" id="33_9_U" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_U"></rect>
												<rect class="Figuroj_33" id="33_8_U" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_U"></rect>
												<rect class="Figuroj_33" id="33_7_U" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_U"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_U" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_U"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_U" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_U"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_U" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_U"></rect>
												<rect class="Figuroj_33" id="33_3_U" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_U"></rect>
												<rect class="Figuroj_33" id="33_2_U" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_U"></rect>
												<rect class="Figuroj_33" id="33_1_U" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_U"></rect>
											</g>
											<g class="simboloj_33" id="g8348" inkscape:label="simboloj_33_U" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(216)">
												<text class="skr-sign s33 aliaj" id="Alia_U_min" xml:space="preserve" x="234.36963" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_U_min">ə</text>
												<text class="skr-sign s33 gr" id="33_Gr_U_min" xml:space="preserve" style="stroke-dasharray:none" x="222.11403" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_U_min">θ</text>
												<text class="skr-sign s33 gr" id="33_Gr_U_may" xml:space="preserve" x="215.78831" y="68.922707" inkscape:label="33_Gr_U_may">Θ</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_U" xml:space="preserve" x="209.47009" y="92.70118" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_U">𐑪</text>
												<text class="skr-sign s33 lat" id="33_Lat_U_min" xml:space="preserve" x="209.64055" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_U_min">u</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_U_may" xml:space="preserve" x="209.48903" y="67.045761" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_U_may">U</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_U" inkscape:label="22_Figuroj_U" style="display:none" inkscape:highlight-color="#58392b" transform="translate(215.99259)">
												<rect class="Figuroj_22" id="22_4_U" inkscape:label="22_4_U" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_U" inkscape:label="22_3_U" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_U" inkscape:label="22_2_U" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_U" inkscape:label="22_1_U" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g7826" inkscape:label="simboloj_22_U" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(215.99259)">
												<text class="skr-sign s22 gr" id="text7818" xml:space="preserve" inkscape:label="22_Gr_U_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">θ</text>
												<text class="skr-sign s22 gr" id="text7820" xml:space="preserve" inkscape:label="22_Gr_U_may" x="226.00742" y="72.848473">Θ</text>
												<text class="skr-sign s22 lat" id="text7822" xml:space="preserve" inkscape:label="22_Lat_U_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">u</text>
												<text class="skr-sign s22 lat_may" id="text7824" xml:space="preserve" inkscape:label="22_Lat_U_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">U</text>
												<text class="skr-sign s22 aliaj" id="text4172" xml:space="preserve" inkscape:label="22_Alia_U_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ə</text>
											</g>
											<g class="Figuroj_group_11" id="g5134" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(216.49259)">
												<rect class="Figuroj_11" id="rect5128" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect5130" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect5132" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g5138" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(216.49259)">
												<text class="skr-sign s11_sx sxa" id="text5136" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑪</text>
											</g>
										</g>
										<g class="keycap" id="Key_Y" transform="translate(15,15)" inkscape:label="Key_Y" style="display:inline">
											<rect class="outer border" id="OutB_Y" x="352" y="55" width="52" height="52" rx="5" inkscape:label="OutB_Y"></rect>
											<rect class="outer fill" id="OutF_Y" x="352" y="55" width="52" height="52" rx="5" inkscape:label="OutF_Y"></rect>
											<rect class="inner border" id="InB_Y" x="358" y="58" width="40" height="40" rx="5" inkscape:label="InB_Y"></rect>
											<rect class="inner fill" id="InF_Y" x="358" y="58" width="40" height="40" rx="5" inkscape:label="InF_Y"></rect>
											<g class="qwerty" id="Key_Y_Original" inkscape:label="Key_Y_Original" style="display:inline">
												<g class="Figuroj_group_33" id="33_Figuroj_Y" inkscape:label="33_Figuroj_Y" style="display:none" inkscape:highlight-color="#58392b" transform="translate(162)">
													<rect class="Figuroj_33" id="33_9_Y" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_Y"></rect>
													<rect class="Figuroj_33" id="33_8_Y" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_Y"></rect>
													<rect class="Figuroj_33" id="33_7_Y" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_Y"></rect>
													<rect class="33_Figuroj_Gr" id="33_6_Y" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_Y"></rect>
													<rect class="33_Figuroj_Gr" id="33_5_Y" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_Y"></rect>
													<rect class="33_Figuroj_Gr" id="33_4_Y" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_Y"></rect>
													<rect class="Figuroj_33" id="33_3_Y" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_Y"></rect>
													<rect class="Figuroj_33" id="33_2_Y" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_Y"></rect>
													<rect class="Figuroj_33" id="33_1_Y" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_Y"></rect>
												</g>
												<g class="simboloj_33" id="g7639" inkscape:label="simboloj_33_Y" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(162)">
													<text class="skr-sign s33 aliaj" id="Alia_Y_min" xml:space="preserve" x="234.36963" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_Y_min">y</text>
													<text class="skr-sign s33 aliaj" id="Alia_Y_may" xml:space="preserve" x="234.4075" y="67.130989" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_Y_may">Y</text>
													<text class="skr-sign s33 gr" id="33_Gr_Y_min" xml:space="preserve" style="stroke-dasharray:none" x="222.11403" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_Y_min">υ</text>
													<text class="skr-sign s33 gr" id="33_Gr_Y_may" xml:space="preserve" x="215.78831" y="68.922707" inkscape:label="33_Gr_Y_may">Υ</text>
													<text class="skr-sign s33 sxa" id="33_Sxa_Y" xml:space="preserve" x="209.47009" y="93.913292" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_Y">𐑘</text>
													<text class="skr-sign s33 lat" id="33_Lat_Y_min" xml:space="preserve" x="209.64055" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_Y_min">ŭ</text>
													<text class="skr-sign s33 lat_may" id="33_Lat_Y_may" xml:space="preserve" style="font-size:12.3272px;stroke-width:0.951142" x="193.68159" y="72.890213" transform="scale(1.0513701,0.95113983)" inkscape:label="33_Lat_Y_may">Ŭ</text>
												</g>
												<g class="Figuroj_group_22" id="22_Figuroj_Y" inkscape:label="22_Figuroj_Y" style="display:none" inkscape:highlight-color="#58392b" transform="translate(161.99259)">
													<rect class="Figuroj_22" id="22_4_Y" inkscape:label="22_4_Y" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_3_Y" inkscape:label="22_3_Y" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_2_Y" inkscape:label="22_2_Y" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_1_Y" inkscape:label="22_1_Y" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
												</g>
												<g class="simboloj_22" id="g7766" inkscape:label="simboloj_22_Y" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(161.99259)">
													<text class="skr-sign s22 gr" id="text7758" xml:space="preserve" inkscape:label="22_Gr_Y_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">υ</text>
													<text class="skr-sign s22 gr" id="text7760" xml:space="preserve" inkscape:label="22_Gr_Y_may" x="226.00742" y="72.848473">Υ</text>
													<text class="skr-sign s22 lat" id="text7762" xml:space="preserve" inkscape:label="22_Lat_Y_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">ŭ</text>
													<text class="skr-sign s22 lat_may" id="text7764" xml:space="preserve" inkscape:label="22_Lat_Y_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">Ŭ</text>
													<text class="skr-sign s22 aliaj" id="text5268" xml:space="preserve" inkscape:label="22_Alia_Y_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">y</text>
													<text class="skr-sign s22 aliaj" id="text5270" xml:space="preserve" inkscape:label="22_Alia_Y_may" x="226.00742" y="72.848473">Y</text>
												</g>
												<g class="Figuroj_group_11" id="g3929" inkscape:label="11_Figuroj_Y" style="display:none" inkscape:highlight-color="#58392b" transform="translate(162.49259)">
													<rect class="Figuroj_11" id="rect3923" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
													<rect class="Figuroj_11" id="rect3925" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
													<rect class="Figuroj_11" id="rect3927" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
												</g>
												<g class="simboloj_11" id="g3933" inkscape:label="simboloj_11_Y" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(162.49259)">
													<text class="skr-sign s11_sx sxa" id="text3931" xml:space="preserve" inkscape:label="11_Sxa_Y" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑘</text>
												</g>
											</g>
											<g class="neorigina DE" id="g9359" inkscape:label="Key_Y_DE(Z)" style="display:none" transform="translate(229.5,-108)">
												<g class="Figuroj_group_33" id="g9313" inkscape:label="33_Figuroj_Z" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-67.507411,108)">
													<rect class="Figuroj_33" id="rect9295" inkscape:label="33_9_Z" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="rect9297" inkscape:label="33_8_Z" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="rect9299" inkscape:label="33_7_Z" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="33_Figuroj_Gr" id="rect9301" inkscape:label="33_6_Z" width="8" height="13.15" x="212" y="84.849998" rx="4"></rect>
													<rect class="33_Figuroj_Gr" id="rect9303" inkscape:label="33_5_Z" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629"></rect>
													<rect class="33_Figuroj_Gr" id="rect9305" inkscape:label="33_4_Z" width="8" height="13.425003" x="212" y="58" rx="4"></rect>
													<rect class="Figuroj_33" id="rect9307" inkscape:label="33_3_Z" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="rect9309" inkscape:label="33_2_Z" width="16" height="13.424997" x="196" y="71.425003" rx="5"></rect>
													<rect class="Figuroj_33" id="rect9311" inkscape:label="33_1_Z" width="16" height="13.425" x="196" y="58" rx="5"></rect>
												</g>
												<g class="simboloj_33" id="g9325" inkscape:label="simboloj_33_Z" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-67.507411,108)">
													<text class="skr-sign s33 aliaj sxa" id="text13406" xml:space="preserve" inkscape:label="33_Sxa_Z_aliaj" x="416.64325" y="105.73122" transform="matrix(0.97203684,0,0,1.0287676,-176.99259,-15)" style="display:inline">𐑞</text>
													<text class="skr-sign s33 gr" id="text9315" xml:space="preserve" style="stroke-dasharray:none" x="222.05284" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_Z_min">ζ</text>
													<text class="skr-sign s33 gr" id="text9317" xml:space="preserve" x="215.78831" y="70.133438" inkscape:label="33_Gr_Z_may">Ζ</text>
													<text class="skr-sign s33 sxa" id="text9319" xml:space="preserve" x="209.48903" y="91.299667" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_Z">𐑟</text>
													<text class="skr-sign s33 lat" id="text9321" xml:space="preserve" x="209.43221" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_Z_min">z</text>
													<text class="skr-sign s33 lat_may" id="text9323" xml:space="preserve" x="209.48903" y="68.307861" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_Z_may">Z</text>
												</g>
												<g class="Figuroj_group_22" id="g9335" inkscape:label="22_Figuroj_Z" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-67.50741,108)">
													<rect class="Figuroj_22" id="rect9327" inkscape:label="22_4_Z" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect9329" inkscape:label="22_3_Z" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect9331" inkscape:label="22_2_Z" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect9333" inkscape:label="22_1_Z" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
												</g>
												<g class="simboloj_22" id="g9345" inkscape:label="simboloj_22_Z" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-67.50741,108)">
													<text class="skr-sign s22 gr" id="text9337" xml:space="preserve" inkscape:label="22_Gr_Z_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ζ</text>
													<text class="skr-sign s22 gr" id="text9339" xml:space="preserve" inkscape:label="22_Gr_Z_may" x="226.00742" y="72.848473">Ζ</text>
													<text class="skr-sign s22 lat" id="text9341" xml:space="preserve" inkscape:label="22_Lat_Z_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">z</text>
													<text class="skr-sign s22 lat_may" id="text9343" xml:space="preserve" inkscape:label="22_Lat_Z_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">Z</text>
												</g>
												<g class="Figuroj_group_11" id="g9353" inkscape:label="11_Figuroj_Z" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-67.007416,108)">
													<rect class="Figuroj_11" id="rect9347" inkscape:label="11_3_Z" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:none;stroke-width:2"></rect>
													<rect class="Figuroj_11" id="rect9349" inkscape:label="11_2_Z" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
													<rect class="Figuroj_11" id="rect9351" inkscape:label="11_1_Z" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
												</g>
												<g class="simboloj_11" id="g9357" inkscape:label="simboloj_11_Z" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-67.007416,108)">
													<text class="skr-sign s11_al aliaj" id="text4076" xml:space="preserve" inkscape:label="11_Sxa_E_aliaj" x="415.06897" y="103.64754" transform="matrix(0.97203684,0,0,1.0287676,-177.49258,-15)" style="display:inline">𐑞</text>
													<text class="skr-sign s11_sx sxa" id="text9355" xml:space="preserve" inkscape:label="11_Sxa_Z" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑟</text>
												</g>
											</g>
										</g>
										<g class="keycap" id="Key_T" transform="translate(15,15)" inkscape:label="Key_T" style="display:inline">
											<rect class="outer border" id="OutB_T" x="298" y="55" width="52" height="52" rx="5" inkscape:label="OutB_T"></rect>
											<rect class="outer fill" id="OutF_T" x="298" y="55" width="52" height="52" rx="5" inkscape:label="OutF_T"></rect>
											<rect class="inner border" id="InB_T" x="304" y="58" width="40" height="40" rx="5" inkscape:label="InB_T"></rect>
											<rect class="inner fill" id="InF_T" x="304" y="58" width="40" height="40" rx="5" inkscape:label="InF_T"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_T" inkscape:label="33_Figuroj_T" style="display:none" inkscape:highlight-color="#58392b" transform="translate(108)">
												<rect class="Figuroj_33" id="33_9_T" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_T"></rect>
												<rect class="Figuroj_33" id="33_8_T" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_T"></rect>
												<rect class="Figuroj_33" id="33_7_T" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_T"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_T" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_T"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_T" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_T"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_T" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_T"></rect>
												<rect class="Figuroj_33" id="33_3_T" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_T"></rect>
												<rect class="Figuroj_33" id="33_2_T" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_T"></rect>
												<rect class="Figuroj_33" id="33_1_T" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_T"></rect>
											</g>
											<g class="simboloj_33" id="g7562" inkscape:label="simboloj_33_T" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(108)">
												<text class="skr-sign s33 aliaj" id="Alia_T_min" xml:space="preserve" x="234.36963" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_T_min">þ</text>
												<text class="skr-sign s33 aliaj" id="Alia_T_may" xml:space="preserve" x="234.4075" y="67.130989" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_T_may">Þ</text>
												<text class="skr-sign s33 gr" id="33_Gr_T_min" xml:space="preserve" style="stroke-dasharray:none" x="222.11403" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_T_min">τ</text>
												<text class="skr-sign s33 gr" id="33_Gr_T_may" xml:space="preserve" x="215.78831" y="68.922707" inkscape:label="33_Gr_T_may">Τ</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_T" xml:space="preserve" x="209.47009" y="93.913292" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_T">𐑑</text>
												<text class="skr-sign s33 lat" id="33_Lat_T_min" xml:space="preserve" x="209.64055" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_T_min">t</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_T_may" xml:space="preserve" x="209.48903" y="67.130989" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_T_may">T</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_T" inkscape:label="22_Figuroj_T" style="display:none" inkscape:highlight-color="#58392b" transform="translate(107.99259)">
												<rect class="Figuroj_22" id="22_4_T" inkscape:label="22_4_T" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_T" inkscape:label="22_3_T" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_T" inkscape:label="22_2_T" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_T" inkscape:label="22_1_T" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g7796" inkscape:label="simboloj_22_T" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(107.99259)">
												<text class="skr-sign s22 gr" id="text7788" xml:space="preserve" inkscape:label="22_Gr_T_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">τ</text>
												<text class="skr-sign s22 gr" id="text7790" xml:space="preserve" inkscape:label="22_Gr_T_may" x="226.00742" y="72.848473">Τ</text>
												<text class="skr-sign s22 lat" id="text7792" xml:space="preserve" inkscape:label="22_Lat_T_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">t</text>
												<text class="skr-sign s22 lat_may" id="text7794" xml:space="preserve" inkscape:label="22_Lat_T_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">Τ</text>
												<text class="skr-sign s22 aliaj" id="text6368" xml:space="preserve" inkscape:label="22_Alia_T_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">þ</text>
												<text class="skr-sign s22 aliaj" id="text6370" xml:space="preserve" inkscape:label="22_Alia_T_may" x="226.00742" y="72.848473">Þ</text>
											</g>
											<g class="Figuroj_group_11" id="g3907" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(108.49259)">
												<rect class="Figuroj_11" id="rect3901" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect3903" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect3905" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g3911" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(108.49259)">
												<text class="skr-sign s11_sx sxa" id="text3909" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑑</text>
											</g>
										</g>
										<g class="keycap" id="Key_R" transform="translate(15,15)" inkscape:label="Key_R" style="display:inline">
											<rect class="outer border" id="OutB_R" x="244" y="55" width="52" height="52" rx="5" inkscape:label="OutB_R"></rect>
											<rect class="outer fill" id="OutF_R" x="244" y="55" width="52" height="52" rx="5" inkscape:label="OutF_R"></rect>
											<rect class="inner border" id="InB_R" x="250" y="58" width="40" height="40" rx="5" inkscape:label="InB_R"></rect>
											<rect class="inner fill" id="InF_R" x="250" y="58" width="40" height="40" rx="5" inkscape:label="InF_R"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_R" inkscape:label="33_Figuroj_R" style="display:none" inkscape:highlight-color="#58392b" transform="translate(54)">
												<rect class="Figuroj_33" id="33_9_R" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_R"></rect>
												<rect class="Figuroj_33" id="33_8_R" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_R"></rect>
												<rect class="Figuroj_33" id="33_7_R" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_R"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_R" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_R"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_R" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_R"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_R" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_R"></rect>
												<rect class="Figuroj_33" id="33_3_R" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_R"></rect>
												<rect class="Figuroj_33" id="33_2_R" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_R"></rect>
												<rect class="Figuroj_33" id="33_1_R" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_R"></rect>
											</g>
											<g class="simboloj_33" id="simboloj_33_R" inkscape:label="simboloj_33_R" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(54)">
												<text class="skr-sign s33 gr" id="33_Gr_R_min" xml:space="preserve" style="stroke-dasharray:none" x="222.09726" y="78.420059" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_R_min">ρ</text>
												<text class="skr-sign s33 gr" id="33_Gr_R_may" xml:space="preserve" x="215.78831" y="68.922707" inkscape:label="33_Gr_R_may">Ρ</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_R" xml:space="preserve" x="209.70683" y="92.70118" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_R">𐑮</text>
												<text class="skr-sign s33 lat" id="33_Lat_R_min" xml:space="preserve" x="209.51744" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_R_min">r</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_R_may" xml:space="preserve" x="209.48903" y="67.130989" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_R_may">R</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_R" inkscape:label="22_Figuroj_R" style="display:none" inkscape:highlight-color="#58392b" transform="translate(53.99259)">
												<rect class="Figuroj_22" id="22_4_R" inkscape:label="22_4_R" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_R" inkscape:label="22_3_R" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_R" inkscape:label="22_2_R" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_R" inkscape:label="22_1_R" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g7856" inkscape:label="simboloj_22_R" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(53.99259)">
												<text class="skr-sign s22 gr" id="text7848" xml:space="preserve" inkscape:label="22_Gr_R_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ρ</text>
												<text class="skr-sign s22 gr" id="text7850" xml:space="preserve" inkscape:label="22_Gr_R_may" x="226.00742" y="72.848473">Ρ</text>
												<text class="skr-sign s22 lat" id="text7852" xml:space="preserve" inkscape:label="22_Lat_R_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">r</text>
												<text class="skr-sign s22 lat_may" id="text7854" xml:space="preserve" inkscape:label="22_Lat_R_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">R</text>
											</g>
											<g class="Figuroj_group_11" id="g3886" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(54.49259)">
												<rect class="Figuroj_11" id="rect3880" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect3882" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect3884" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g3892" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(54.49259)">
												<text class="skr-sign s11_sx sxa" id="text3890" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑮</text>
											</g>
										</g>
										<g class="keycap" id="Key_E" transform="translate(15,15)" inkscape:label="Key_E" style="display:inline">
											<rect class="outer border" id="OutB_E" x="190" y="55" width="52" height="52" rx="5" inkscape:label="OutB_E" style="display:inline"></rect>
											<rect class="outer fill" id="OutF_E" x="190" y="55" width="52" height="52" rx="5" inkscape:label="OutF_E" style="display:inline"></rect>
											<rect class="inner border" id="InB_E" x="196" y="58" width="40" height="40" rx="5" inkscape:label="InB_E" style="display:inline"></rect>
											<rect class="inner fill" id="InF_E" x="196" y="58" width="40" height="40" rx="5" inkscape:label="InF_E" style="display:inline"></rect>
											<g class="Figuroj_group_33" id="33_Figuroj_E" inkscape:label="33_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b">
												<rect class="Figuroj_33" id="33_9_E" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_E"></rect>
												<rect class="Figuroj_33" id="33_8_E" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_E"></rect>
												<rect class="Figuroj_33" id="33_7_E" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_E"></rect>
												<rect class="33_Figuroj_Gr" id="33_6_E" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_E"></rect>
												<rect class="33_Figuroj_Gr" id="33_5_E" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_E"></rect>
												<rect class="33_Figuroj_Gr" id="33_4_E" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_E"></rect>
												<rect class="Figuroj_33" id="33_3_E" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_E"></rect>
												<rect class="Figuroj_33" id="33_2_E" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_E"></rect>
												<rect class="Figuroj_33" id="33_1_E" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_E"></rect>
											</g>
											<g class="simboloj_33" id="g1145" inkscape:label="simboloj_33_E" style="display:none" inkscape:highlight-color="#8220a6">
												<text class="skr-sign s33 aliaj sxa" id="text1424" xml:space="preserve" x="234.23705" y="92.70118" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_Eu">𐑱</text>
												<text class="skr-sign s33 aliaj" id="Alia_E_min" xml:space="preserve" x="234.36963" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_E">ɛ</text>
												<text class="skr-sign s33 aliaj" id="Alia_E_may" xml:space="preserve" x="234.4075" y="67.121521" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_E">Ɛ</text>
												<text class="skr-sign s33 gr" id="33_Gr_E_min" xml:space="preserve" style="stroke-dasharray:none" x="222.11403" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_E_min">ε</text>
												<text class="skr-sign s33 gr" id="33_Gr_E_may" xml:space="preserve" x="215.78831" y="68.922707" inkscape:label="33_Gr_E_may">Ε</text>
												<text class="skr-sign s33 sxa" id="33_Sxa_E" xml:space="preserve" x="209.47009" y="92.70118" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_E">𐑧</text>
												<text class="skr-sign s33 lat" id="33_Lat_E_min" xml:space="preserve" x="209.64055" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_E_min">e</text>
												<text class="skr-sign s33 lat_may" id="33_Lat_E_may" xml:space="preserve" x="209.48903" y="67.130989" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_E_may">E</text>
											</g>
											<g class="Figuroj_group_22" id="22_Figuroj_E" inkscape:label="22_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-0.00741)">
												<rect class="Figuroj_22" id="22_4_E" inkscape:label="22_4_E" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_3_E" inkscape:label="22_3_E" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_2_E" inkscape:label="22_2_E" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_22" id="22_1_E" inkscape:label="22_1_E" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_22" id="g7886" inkscape:label="simboloj_22_E" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-0.00741)">
												<text class="skr-sign s22 gr" id="text7878" xml:space="preserve" inkscape:label="22_Gr_E_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ε</text>
												<text class="skr-sign s22 gr" id="text7880" xml:space="preserve" inkscape:label="22_Gr_E_may" x="226.00742" y="72.848473">Ε</text>
												<text class="skr-sign s22 lat" id="text7882" xml:space="preserve" inkscape:label="22_Lat_E_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">e</text>
												<text class="skr-sign s22 lat_may" id="text7884" xml:space="preserve" inkscape:label="22_Lat_E_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">E</text>
												<text class="skr-sign s22 aliaj" id="text7470" xml:space="preserve" inkscape:label="22_Alia_E_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ɛ</text>
												<text class="skr-sign s22 aliaj" id="text7472" xml:space="preserve" inkscape:label="22_Alia_E_may" x="226.00742" y="72.848473">Ɛ</text>
											</g>
											<g class="Figuroj_group_11" id="g1332" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(0.49259)">
												<rect class="Figuroj_11" id="rect1330" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
												<rect class="Figuroj_11" id="rect1328" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
												<rect class="Figuroj_11" id="rect1346" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
											</g>
											<g class="simboloj_11" id="g1338" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(0.49259)">
												<text class="skr-sign s11_al aliaj" id="text1334" xml:space="preserve" inkscape:label="11_Sxa_E_aliaj" x="232.47032" y="91.205238" transform="scale(0.97203684,1.0287676)">𐑱</text>
												<text class="skr-sign s11_sx sxa" id="text1336" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑧</text>
											</g>
										</g>
										<g class="keycap" id="Key_W" transform="translate(15,15)" inkscape:label="Key_W" style="display:inline">
											<rect class="outer border" id="OutB_W" x="136" y="55" width="52" height="52" rx="5" inkscape:label="OutB_W"></rect>
											<rect class="outer fill" id="OutF_W" x="136" y="55" width="52" height="52" rx="5" inkscape:label="OutF_W"></rect>
											<rect class="inner border" id="InB_W" x="142" y="58" width="40" height="40" rx="5" inkscape:label="InB_W"></rect>
											<rect class="inner fill" id="InF_W" x="142" y="58" width="40" height="40" rx="5" inkscape:label="InF_W"></rect>
											<g class="qwerty" id="Key_W_Original" inkscape:label="Key_W_Original" style="display:inline" sodipodi:insensitive="true">
												<g class="Figuroj_group_33" id="33_Figuroj_W" inkscape:label="33_Figuroj_W" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-54)">
													<rect class="Figuroj_33" id="33_9_W" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_W"></rect>
													<rect class="Figuroj_33" id="33_8_W" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_W"></rect>
													<rect class="Figuroj_33" id="33_7_W" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_W"></rect>
													<rect class="33_Figuroj_Gr" id="33_6_W" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_W"></rect>
													<rect class="33_Figuroj_Gr" id="33_5_W" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_W"></rect>
													<rect class="33_Figuroj_Gr" id="33_4_W" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_W"></rect>
													<rect class="Figuroj_33" id="33_3_W" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_W"></rect>
													<rect class="Figuroj_33" id="33_2_W" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_W"></rect>
													<rect class="Figuroj_33" id="33_1_W" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_W"></rect>
												</g>
												<g class="simboloj_33" id="g10767" inkscape:label="simboloj_33_W" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-54)">
													<text class="skr-sign s33 aliaj" id="Alia_W_min" xml:space="preserve" x="234.4075" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_W_min">w</text>
													<text class="skr-sign s33 aliaj" id="Alia_W_may" xml:space="preserve" x="234.4075" y="67.130989" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_W_may">W</text>
													<text class="skr-sign s33 gr" id="33_Gr_s3_min" xml:space="preserve" style="stroke-dasharray:none" x="222.11403" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_s3_min">ς</text>
													<text class="skr-sign s33 gr" id="33_Gr_s3_may" xml:space="preserve" x="215.78831" y="69.565521" inkscape:label="33_Gr_s3_may">ς</text>
													<text class="skr-sign s33 sxa" id="33_Sxa_W" xml:space="preserve" x="209.47009" y="91.299667" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_W">𐑡</text>
													<text class="skr-sign s33 lat" id="33_Lat_W_min" xml:space="preserve" x="209.64055" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_W_min">ĝ</text>
													<text class="skr-sign s33 lat_may" id="33_Lat_W_may" xml:space="preserve" x="209.48903" y="68.523033" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_W_may">Ĝ</text>
												</g>
												<g class="Figuroj_group_22" id="22_Figuroj_W" inkscape:label="22_Figuroj_W" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-54.00741)">
													<rect class="Figuroj_22" id="22_4_W" inkscape:label="22_4_W" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_3_W" inkscape:label="22_3_W" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_2_W" inkscape:label="22_2_W" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_1_W" inkscape:label="22_1_W" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
												</g>
												<g class="simboloj_22" id="g7916" inkscape:label="simboloj_22_W" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-54.00741)">
													<text class="skr-sign s22 gr" id="text7908" xml:space="preserve" inkscape:label="22_Gr_W_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ς</text>
													<text class="skr-sign s22 gr" id="text7910" xml:space="preserve" inkscape:label="22_Gr_W_may" x="226.00742" y="72.848473">ς</text>
													<text class="skr-sign s22 lat" id="text7912" xml:space="preserve" inkscape:label="22_Lat_W_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">ĝ</text>
													<text class="skr-sign s22 lat_may" id="text7914" xml:space="preserve" inkscape:label="22_Lat_W_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">Ĝ</text>
													<text class="skr-sign s22 aliaj" id="text8574" xml:space="preserve" inkscape:label="22_Alia_W_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">w</text>
													<text class="skr-sign s22 aliaj" id="text8576" xml:space="preserve" inkscape:label="22_Alia_W_may" x="226.00742" y="72.848473">W</text>
												</g>
												<g class="Figuroj_group_11" id="g3847" inkscape:label="11_Figuroj_W" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-53.50741)">
													<rect class="Figuroj_11" id="rect3841" inkscape:label="11_3_W" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
													<rect class="Figuroj_11" id="rect3843" inkscape:label="11_2_W" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
													<rect class="Figuroj_11" id="rect3845" inkscape:label="11_1_W" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
												</g>
												<g class="simboloj_11" id="g3853" inkscape:label="simboloj_11_W" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-53.50741)">
													<text class="skr-sign s11_sx sxa" id="text3851" xml:space="preserve" inkscape:label="11_Sxa_W" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑡</text>
												</g>
											</g>
											<g class="FR neorigina" id="Key_W_FR(Z)" inkscape:label="Key_W_FR(Z)" style="display:none" transform="translate(13.5,-108)">
												<g class="Figuroj_group_33" id="g3633" inkscape:label="33_Figuroj_Z" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-67.507411,108)">
													<rect class="Figuroj_33" id="rect3615" inkscape:label="33_9_Z" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="rect3617" inkscape:label="33_8_Z" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="rect3619" inkscape:label="33_7_Z" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="33_Figuroj_Gr" id="rect3621" inkscape:label="33_6_Z" width="8" height="13.15" x="212" y="84.849998" rx="4"></rect>
													<rect class="33_Figuroj_Gr" id="rect3623" inkscape:label="33_5_Z" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629"></rect>
													<rect class="33_Figuroj_Gr" id="rect3625" inkscape:label="33_4_Z" width="8" height="13.425003" x="212" y="58" rx="4"></rect>
													<rect class="Figuroj_33" id="rect3627" inkscape:label="33_3_Z" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="rect3629" inkscape:label="33_2_Z" width="16" height="13.424997" x="196" y="71.425003" rx="5"></rect>
													<rect class="Figuroj_33" id="rect3631" inkscape:label="33_1_Z" width="16" height="13.425" x="196" y="58" rx="5"></rect>
												</g>
												<g class="simboloj_33" id="g3645" inkscape:label="simboloj_33_Z" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-67.507411,108)">
													<text class="skr-sign s33 aliaj sxa" id="text11544" xml:space="preserve" inkscape:label="33_Sxa_Z_aliaj" x="194.42946" y="105.58961" transform="matrix(0.97203684,0,0,1.0287676,39.007411,-15)" style="display:inline">𐑞</text>
													<text class="skr-sign s33 gr" id="text3635" xml:space="preserve" style="stroke-dasharray:none" x="222.05284" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_Z_min">ζ</text>
													<text class="skr-sign s33 gr" id="text3637" xml:space="preserve" x="215.78831" y="70.133438" inkscape:label="33_Gr_Z_may">Ζ</text>
													<text class="skr-sign s33 sxa" id="text3639" xml:space="preserve" x="209.48903" y="91.299667" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_Z">𐑟</text>
													<text class="skr-sign s33 lat" id="text3641" xml:space="preserve" x="209.43221" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_Z_min">z</text>
													<text class="skr-sign s33 lat_may" id="text3643" xml:space="preserve" x="209.48903" y="68.307861" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_Z_may">Z</text>
												</g>
												<g class="Figuroj_group_22" id="g3655" inkscape:label="22_Figuroj_Z" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-67.50741,108)">
													<rect class="Figuroj_22" id="rect3647" inkscape:label="22_4_Z" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect3649" inkscape:label="22_3_Z" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect3651" inkscape:label="22_2_Z" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect3653" inkscape:label="22_1_Z" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
												</g>
												<g class="simboloj_22" id="g3665" inkscape:label="simboloj_22_Z" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-67.50741,108)">
													<text class="skr-sign s22 gr" id="text3657" xml:space="preserve" inkscape:label="22_Gr_Z_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">ζ</text>
													<text class="skr-sign s22 gr" id="text3659" xml:space="preserve" inkscape:label="22_Gr_Z_may" x="226.00742" y="72.848473">Ζ</text>
													<text class="skr-sign s22 lat" id="text3661" xml:space="preserve" inkscape:label="22_Lat_Z_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">z</text>
													<text class="skr-sign s22 lat_may" id="text3663" xml:space="preserve" inkscape:label="22_Lat_Z_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">Z</text>
												</g>
												<g class="Figuroj_group_11" id="g3673" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-67.007416,108)">
													<rect class="Figuroj_11" id="rect3667" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:none;stroke-width:2"></rect>
													<rect class="Figuroj_11" id="rect3669" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
													<rect class="Figuroj_11" id="rect3671" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
												</g>
												<g class="simboloj_11" id="g3677" inkscape:label="simboloj_11_Z" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-67.007416,108)">
													<text class="skr-sign s11_al aliaj" id="text11540" xml:space="preserve" inkscape:label="11_Sxa_Z_aliaj" x="192.85516" y="103.64754" transform="matrix(0.97203684,0,0,1.0287676,38.507416,-15)" style="display:inline">𐑞</text>
													<text class="skr-sign s11_sx sxa" id="text3675" xml:space="preserve" inkscape:label="11_Sxa_Z" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑟</text>
												</g>
											</g>
										</g>
										<g class="keycap" id="Key_Q" transform="translate(15,15)" inkscape:label="Key_Q" style="display:inline">
											<rect class="outer border" id="OutB_Q" x="82" y="55" width="52" height="52" rx="5" style="display:inline" inkscape:label="OutB_Q"></rect>
											<rect class="outer fill" id="OutF_Q" x="82" y="55" width="52" height="52" rx="5" style="display:inline" inkscape:label="OutF_Q"></rect>
											<rect class="inner border" id="InB_Q" x="88" y="58" width="40" height="40" rx="5" style="display:inline" inkscape:label="InB_Q"></rect>
											<rect class="inner fill" id="InF_Q" x="88" y="58" width="40" height="40" rx="5" style="display:inline" inkscape:label="InF_Q"></rect>
											<g class="qwerty" id="Key_Q_Original" inkscape:label="Key_Q_Original">
												<g class="Figuroj_group_33" id="33_Figuroj_Q" inkscape:label="33_Figuroj_Q" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-108)">
													<rect class="Figuroj_33" id="33_9_Q" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_Q"></rect>
													<rect class="Figuroj_33" id="33_8_Q" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_Q"></rect>
													<rect class="Figuroj_33" id="33_7_Q" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_Q"></rect>
													<rect class="33_Figuroj_Gr" id="33_6_Q" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_Q"></rect>
													<rect class="33_Figuroj_Gr" id="33_5_Q" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_Q"></rect>
													<rect class="33_Figuroj_Gr" id="33_4_Q" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_Q"></rect>
													<rect class="Figuroj_33" id="33_3_Q" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_Q"></rect>
													<rect class="Figuroj_33" id="33_2_Q" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_Q"></rect>
													<rect class="Figuroj_33" id="33_1_Q" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_Q"></rect>
												</g>
												<g class="simboloj_33" id="simboloj_33_Q" inkscape:label="simboloj_33_Q" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-108)">
													<text class="skr-sign s33 aliaj" id="Alia_Q_min" xml:space="preserve" x="234.57796" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_Q_min">q</text>
													<text class="skr-sign s33 aliaj" id="Alia_Q_may" xml:space="preserve" x="234.4075" y="66.742729" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_Q_may">Q</text>
													<text class="skr-sign s33 gr" id="33_Gr_Q_min" xml:space="preserve" style="stroke-dasharray:none" x="222.04277" y="80.364136" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_Q_min">·</text>
													<text class="skr-sign s33 gr" id="33_Gr_Q_may" xml:space="preserve" x="215.83376" y="69.565521" inkscape:label="33_Gr_Q_may">·</text>
													<text class="skr-sign s33 sxa" id="33_Sxa_Q" xml:space="preserve" x="209.48903" y="93.979584" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_Q">𐑖</text>
													<text class="skr-sign s33 lat" id="33_Lat_Q_min" xml:space="preserve" x="209.47009" y="80.354668" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_Q_min">ŝ</text>
													<text class="skr-sign s33 lat_may" id="33_Lat_Q_may" xml:space="preserve" style="stroke-width:0.963352" x="196.16791" y="72.73349" transform="scale(1.0380447,0.96334965)" inkscape:label="33_Lat_Q_may">Ŝ</text>
												</g>
												<g class="Figuroj_group_22" id="22_Figuroj_Q" inkscape:label="22_Figuroj_Q" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-108.00741)">
													<rect class="Figuroj_22" id="22_4_Q" inkscape:label="22_4_Q" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_3_Q" inkscape:label="22_3_Q" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_2_Q" inkscape:label="22_2_Q" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_1_Q" inkscape:label="22_1_Q" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
												</g>
												<g class="simboloj_22" id="g7946" inkscape:label="simboloj_22_Q" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-108.00741)">
													<text class="skr-sign s22 gr" id="text7938" xml:space="preserve" inkscape:label="22_Gr_Q_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">·</text>
													<text class="skr-sign s22 gr" id="text7940" xml:space="preserve" inkscape:label="22_Gr_Q_may" x="226.00742" y="72.848473">·</text>
													<text class="skr-sign s22 lat" id="text7942" xml:space="preserve" inkscape:label="22_Lat_Q_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">ŝ</text>
													<text class="skr-sign s22 lat_may" id="text7944" xml:space="preserve" inkscape:label="22_Lat_Q_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">Ŝ</text>
													<text class="skr-sign s22 aliaj" id="text10782" xml:space="preserve" inkscape:label="22_Alia_Q_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">q</text>
													<text class="skr-sign s22 aliaj" id="text10784" xml:space="preserve" inkscape:label="22_Alia_Q_may" x="226.00742" y="72.848473">Q</text>
												</g>
												<g class="Figuroj_group_11" id="g3868" inkscape:label="11_Figuroj_Q" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-107.50741)">
													<rect class="Figuroj_11" id="rect3862" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
													<rect class="Figuroj_11" id="rect3864" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
													<rect class="Figuroj_11" id="rect3866" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
												</g>
												<g class="simboloj_11" id="g3872" inkscape:label="simboloj_11_Q" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-107.50741)">
													<text class="skr-sign s11_sx sxa" id="text3870" xml:space="preserve" inkscape:label="11_Sxa_Q" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑖</text>
												</g>
											</g>
											<g class="FR neorigina" id="Key_Q_FR(A)" inkscape:label="Key_Q_FR(A)" style="display:none" transform="translate(-54.364899,-0.04438387)">
												<g class="Figuroj_group_33" id="g1718" inkscape:label="33_Figuroj_A" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-53.959001,0.049586)">
													<rect class="Figuroj_33" id="rect1700" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_9_A"></rect>
													<rect class="Figuroj_33" id="rect1702" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)" inkscape:label="33_8_A"></rect>
													<rect class="Figuroj_33" id="rect1704" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)" inkscape:label="33_7_A"></rect>
													<rect class="33_Figuroj_Gr" id="rect1706" width="8" height="13.15" x="212" y="84.849998" rx="4" inkscape:label="33_6_A"></rect>
													<rect class="33_Figuroj_Gr" id="rect1708" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629" inkscape:label="33_5_A"></rect>
													<rect class="33_Figuroj_Gr" id="rect1710" width="8" height="13.425003" x="212" y="58" rx="4" inkscape:label="33_4_A"></rect>
													<rect class="Figuroj_33" id="rect1712" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)" inkscape:label="33_3_A"></rect>
													<rect class="Figuroj_33" id="rect1714" width="16" height="13.424997" x="196" y="71.425003" rx="5" inkscape:label="33_2_A"></rect>
													<rect class="Figuroj_33" id="rect1716" width="16" height="13.425" x="196" y="58" rx="5" inkscape:label="33_1_A"></rect>
												</g>
												<g class="simboloj_33" id="g1736" inkscape:label="simboloj_33_A" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-53.959001,0.049586)">
													<text class="skr-sign s33 aliaj sxa" id="text1720" xml:space="preserve" x="234.31281" y="92.739059" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_Au">𐑲</text>
													<text class="skr-sign s33 aliaj" id="text1722" xml:space="preserve" x="234.14235" y="79.090469" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_A_min">æ</text>
													<text class="skr-sign s33 aliaj" id="text1724" xml:space="preserve" x="234.4075" y="67.746361" transform="scale(0.97203684,1.0287676)" inkscape:label="Alia_A_may">Æ</text>
													<text class="skr-sign s33 gr" id="text1726" xml:space="preserve" style="stroke-dasharray:none" x="221.99603" y="79.099846" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Gr_A_min">α</text>
													<text class="skr-sign s33 gr" id="text1728" xml:space="preserve" x="215.78831" y="69.565521" inkscape:label="33_Gr_A_may">Α</text>
													<text class="skr-sign s33 sxa" id="text1730" xml:space="preserve" x="209.65948" y="92.739059" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Sxa_A">𐑨</text>
													<text class="skr-sign s33 lat" id="text1732" xml:space="preserve" x="209.65948" y="79.0952" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_A_min">a</text>
													<text class="skr-sign s33 lat_may" id="text1734" xml:space="preserve" x="209.48903" y="67.755829" transform="scale(0.97203684,1.0287676)" inkscape:label="33_Lat_A_may">A</text>
												</g>
												<g class="Figuroj_group_22" id="g1746" inkscape:label="22_Figuroj_A" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-54.146987,0.049586)">
													<rect class="Figuroj_22" id="rect1738" inkscape:label="22_4_A" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect1740" inkscape:label="22_3_A" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect1742" inkscape:label="22_2_A" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="rect1744" inkscape:label="22_1_A" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
												</g>
												<g class="simboloj_22" id="g1760" inkscape:label="simboloj_22_A" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(-54.146987,0.049586)">
													<text class="skr-sign s22 gr" id="text1748" xml:space="preserve" inkscape:label="22_Gr_A_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">α</text>
													<text class="skr-sign s22 gr" id="text1750" xml:space="preserve" inkscape:label="22_Gr_A_may" x="226.00742" y="72.848473">Α</text>
													<text class="skr-sign s22 lat" id="text1752" xml:space="preserve" inkscape:label="22_Lat_A_min" x="211.93375" y="88.574272" transform="scale(0.97203684,1.0287676)">a</text>
													<text class="skr-sign s22 lat_may" id="text1754" xml:space="preserve" inkscape:label="22_Lat_A_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">A</text>
													<text class="skr-sign s22 aliaj" id="text1756" xml:space="preserve" inkscape:label="22_Alia_A_min" x="232.50911" y="88.517456" transform="scale(0.97203684,1.0287676)">æ</text>
													<text class="skr-sign s22 aliaj" id="text1758" xml:space="preserve" inkscape:label="22_Alia_A_may" x="226.00742" y="72.848473">Æ</text>
												</g>
												<g class="Figuroj_group_11" id="g1768" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-53.094187,0.049586)">
													<rect class="Figuroj_11" id="rect1762" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
													<rect class="Figuroj_11" id="rect1764" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
													<rect class="Figuroj_11" id="rect1766" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
												</g>
												<g class="simboloj_11" id="simboloj_11_A_FR" inkscape:label="simboloj_11_A_FR" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-53.094187,0.049586)">
													<text class="skr-sign s11_al aliaj" id="text1771" xml:space="preserve" inkscape:label="11_Sxa_A_aliaj_FR" x="232.47032" y="91.205238" transform="scale(0.97203684,1.0287676)">𐑲</text>
													<text class="skr-sign s11_sx sxa" id="text1773" xml:space="preserve" inkscape:label="11_Sxa_A_FR" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑨</text>
												</g>
											</g>
										</g>
									</g>
									<g id="Number_Keys" inkscape:groupmode="layer" inkscape:label="Number Keys" style="display:inline">
										<g class="keycap" id="Key_1" transform="translate(15,15)" inkscape:label="Key_1" style="display:inline">
											<rect class="outer border" id="OutB_1" x="55" y="1" width="52" height="52" rx="5" inkscape:label="OutB_1"></rect>
											<rect class="outer fill" id="OutF_1" x="55" y="1" width="52" height="52" rx="5" inkscape:label="OutF_1"></rect>
											<rect class="inner border" id="InB_1" x="61" y="4" width="40" height="40" rx="5" inkscape:label="InB_1"></rect>
											<rect class="inner fill" id="InF_1" x="61" y="4" width="40" height="40" rx="5" inkscape:label="InF_1"></rect>
											<g class="Figuroj_group_12" id="g5650" inkscape:label="12_Figuroj_1" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-135.00741,-54)">
												<rect class="Figuroj_12" id="rect5642" inkscape:label="12_3_1" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect5644" inkscape:label="12_2_1" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect5648" inkscape:label="12_1_1" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g5672" inkscape:label="simboloj_12_1" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-135.00741,-54)">
												<text class="skr-sign simb altgr ES" id="text5664" xml:space="preserve" inkscape:label="12_Sim_1_AltGr_ES" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">|</text>
												<text class="skr-sign simb shift FR" id="text1624" xml:space="preserve" inkscape:label="12_Sim_1_Shift_FR" x="226.00742" y="72.848473" style="display:inline">1</text>
												<text class="skr-sign simb shift EN ES LA DE" id="text5666" xml:space="preserve" inkscape:label="12_Sim_1_Shift_EN-ES-LA-DE" x="226.00742" y="72.848473" style="display:inline">!</text>
												<text class="skr-sign FR" id="text1626" xml:space="preserve" inkscape:label="12_Sim_1_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">&amp;</text>
												<text class="skr-sign num" id="text5670" xml:space="preserve" inkscape:label="12_Sim_1" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">1</text>
											</g>
										</g>
										<g class="keycap" id="Key_2" transform="translate(15,15)" inkscape:label="Key_2" style="display:inline">
											<rect class="outer border" id="OutB_2" x="109" y="1" width="52" height="52" rx="5" inkscape:label="OutB_2"></rect>
											<rect class="outer fill" id="OutF_2" x="109" y="1" width="52" height="52" rx="5" inkscape:label="OutF_2"></rect>
											<rect class="inner border" id="InB_2" x="115" y="4" width="40" height="40" rx="5" inkscape:label="InB_2"></rect>
											<rect class="inner fill" id="InF_2" x="115" y="4" width="40" height="40" rx="5" inkscape:label="InF_2"></rect>
											<g class="Figuroj_group_12" id="g7198" inkscape:label="21_Figuroj_1" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-81.007416,-54)">
												<rect class="Figuroj_12" id="rect7192" inkscape:label="12_3_2" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect7194" inkscape:label="12_2_2" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect7196" inkscape:label="12_1_2" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g7206" inkscape:label="simboloj_12_2" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-81.007416,-54)">
												<text class="skr-sign simb altgr DE" id="text1919" xml:space="preserve" inkscape:label="12_Sim_2_AltGr_DE" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">²</text>
												<text class="skr-sign simb altgr ES LA" id="text4903" xml:space="preserve" inkscape:label="12_Sim_2_AltGr_ES-LA" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">@</text>
												<text class="skr-sign simb shift FR" id="text4908" xml:space="preserve" inkscape:label="12_Sim_2_Shift_FR" x="226.00742" y="72.848473">2</text>
												<text class="skr-sign simb shift ES LA DE" id="text7202" xml:space="preserve" inkscape:label="12_Sim_2_Shift_ES-LA-DE" x="226.00742" y="72.848473" style="display:inline">&quot;</text>
												<text class="skr-sign simb shift EN" id="text1702" xml:space="preserve" inkscape:label="12_Sim_2_Shift_EN" x="226.00742" y="72.848473" style="display:inline">@</text>
												<text class="skr-sign FR" id="text4905" xml:space="preserve" inkscape:label="12_Sim_2_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">é</text>
												<text class="skr-sign num" id="text7204" xml:space="preserve" inkscape:label="12_Sim_2" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">2</text>
											</g>
										</g>
										<g class="keycap" id="Key_3" transform="translate(15,15)" inkscape:label="Key_3" style="display:inline">
											<rect class="outer border" id="OutB_3" x="163" y="1" width="52" height="52" rx="5" inkscape:label="OutB_3"></rect>
											<rect class="outer fill" id="OutF_3" x="163" y="1" width="52" height="52" rx="5" inkscape:label="OutF_3"></rect>
											<rect class="inner border" id="InB_3" x="169" y="4" width="40" height="40" rx="5" inkscape:label="InB_3"></rect>
											<rect class="inner fill" id="InF_3" x="169" y="4" width="40" height="40" rx="5" inkscape:label="InF_3"></rect>
											<g class="Figuroj_group_12" id="g8519" inkscape:label="12_Figuroj_3" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-27.007416,-54)">
												<rect class="Figuroj_12" id="rect8513" inkscape:label="12_3_3" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect8515" inkscape:label="12_2_3" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect8517" inkscape:label="12_1_3" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g8527" inkscape:label="simboloj_12_3" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-27.007416,-54)">
												<text class="skr-sign simb altgr DE" id="text2025" xml:space="preserve" inkscape:label="12_Sim_3_AltGr_DE" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">³</text>
												<text class="skr-sign simb altgr ES FR" id="text8521" xml:space="preserve" inkscape:label="12_Sim_3_AltGr_ES-FR" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">#</text>
												<text class="skr-sign simb shift DE" id="text31945" xml:space="preserve" inkscape:label="12_Sim_3_Shift_DE" x="226.00742" y="72.848473" style="display:inline">§</text>
												<text class="skr-sign simb shift FR" id="text6435" xml:space="preserve" inkscape:label="12_Sim_3_Shift_FR" x="226.00742" y="72.848473">3</text>
												<text class="skr-sign simb shift LA" id="text3774" xml:space="preserve" inkscape:label="12_Sim_3_Shift_LA" x="226.00742" y="72.848473" style="display:inline">#</text>
												<text class="skr-sign simb shift ES" id="text1716" xml:space="preserve" inkscape:label="12_Sim_3_Shift_ES" x="226.00742" y="72.848473" style="display:inline">·</text>
												<text class="skr-sign simb shift EN" id="text8523" xml:space="preserve" inkscape:label="12_Sim_3_Shift_EN" x="226.00742" y="72.848473" style="display:inline">#</text>
												<text class="skr-sign FR" id="text6433" xml:space="preserve" inkscape:label="12_Sim_3_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">&quot;</text>
												<text class="skr-sign num" id="text8525" xml:space="preserve" inkscape:label="12_Sim_3" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">3</text>
											</g>
										</g>
										<g class="keycap" id="Key_4" transform="translate(15,15)" inkscape:label="Key_4" style="display:inline">
											<rect class="outer border" id="OutB_4" x="217" y="1" width="52" height="52" rx="5" inkscape:label="OutB_4"></rect>
											<rect class="outer fill" id="OutF_4" x="217" y="1" width="52" height="52" rx="5" inkscape:label="OutF_4"></rect>
											<rect class="inner border" id="InB_4" x="223" y="4" width="40" height="40" rx="5" inkscape:label="InB_4"></rect>
											<rect class="inner fill" id="InF_4" x="223" y="4" width="40" height="40" rx="5" inkscape:label="InF_4"></rect>
											<g class="Figuroj_group_12" id="g8564" inkscape:label="12_Figuroj_4" style="display:none" inkscape:highlight-color="#58392b" transform="translate(26.99259,-54)">
												<rect class="Figuroj_12" id="rect8558" inkscape:label="12_3_4" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect8560" inkscape:label="12_2_4" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect8562" inkscape:label="12_1_4" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g8572" inkscape:label="simboloj_12_4" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(26.99259,-54)">
												<text class="skr-sign simb altgr DE" id="text3938" xml:space="preserve" inkscape:label="12_Sim_4_AltGr_DE" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">€</text>
												<text class="skr-sign simb altgr FR" id="text4837" xml:space="preserve" inkscape:label="12_Sim_4_AltGr_FR" x="232.50911" y="87.811966" style="font-size:12px;display:none;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">{</text>
												<text class="skr-sign simb altgr ES" id="text8566" xml:space="preserve" inkscape:label="12_Sim_4_AltGr_ES" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">~</text>
												<text class="skr-sign simb shift FR" id="text4839" xml:space="preserve" inkscape:label="12_Sim_4_Shift_FR" x="226.00742" y="72.848473">4</text>
												<text class="skr-sign simb shift EN ES LA DE" id="text8568" xml:space="preserve" inkscape:label="12_Sim_4_Shift_EN-ES-LA-DE" x="226.00742" y="72.848473" style="display:inline">$</text>
												<text class="skr-sign FR" id="text4841" xml:space="preserve" inkscape:label="12_Sim_4_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">'</text>
												<text class="skr-sign num" id="text8570" xml:space="preserve" inkscape:label="12_Sim_4" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">4</text>
											</g>
										</g>
										<g class="keycap" id="Key_5" transform="translate(15,15)" inkscape:label="Key_5" style="display:inline">
											<rect class="outer border" id="OutB_5" x="271" y="1" width="52" height="52" rx="5" inkscape:label="OutB_5"></rect>
											<rect class="outer fill" id="OutF_5" x="271" y="1" width="52" height="52" rx="5" inkscape:label="OutF_5"></rect>
											<rect class="inner border" id="InB_5" x="277" y="4" width="40" height="40" rx="5" inkscape:label="InB_5"></rect>
											<rect class="inner fill" id="InF_5" x="277" y="4" width="40" height="40" rx="5" inkscape:label="InF_5"></rect>
											<g class="Figuroj_group_12" id="g8588" inkscape:label="12_Figuroj_5" style="display:none" inkscape:highlight-color="#58392b" transform="translate(80.992584,-54)">
												<rect class="Figuroj_12" id="rect8582" inkscape:label="12_3_5" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect8584" inkscape:label="12_2_5" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect8586" inkscape:label="12_1_5" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g8596" inkscape:label="simboloj_12_5" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(81.341569,-54)">
												<text class="skr-sign simb altgr FR" id="text6371" xml:space="preserve" inkscape:label="12_Sim_5_AltGr_FR" x="232.50911" y="87.811966" style="display:inline;font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">[</text>
												<text class="skr-sign simb altgr ES" id="text8590" xml:space="preserve" inkscape:label="12_Sim_5_AltGr_ES" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">€</text>
												<text class="skr-sign simb shift FR" id="text6374" xml:space="preserve" inkscape:label="12_Sim_5_Shift_FR" x="226.00742" y="72.848473">5</text>
												<text class="skr-sign simb shift EN ES LA DE" id="text8592" xml:space="preserve" inkscape:label="12_Sim_5_Shift_EN-ES-LA-DE" x="226.00742" y="72.848473" style="display:inline">%</text>
												<text class="skr-sign FR" id="text6376" xml:space="preserve" inkscape:label="12_Sim_5_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">(</text>
												<text class="skr-sign num" id="text8594" xml:space="preserve" inkscape:label="12_Sim_5" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">5</text>
											</g>
										</g>
										<g class="keycap" id="Key_6" transform="translate(15,15)" inkscape:label="Key_6" style="display:inline">
											<rect class="outer border" id="OutB_6" x="325" y="1" width="52" height="52" rx="5" inkscape:label="OutB_6"></rect>
											<rect class="outer fill" id="OutF_6" x="325" y="1" width="52" height="52" rx="5" inkscape:label="OutF_6"></rect>
											<rect class="inner border" id="InB_6" x="331" y="4" width="40" height="40" rx="5" inkscape:label="InB_6"></rect>
											<rect class="inner fill" id="InF_6" x="331" y="4" width="40" height="40" rx="5" inkscape:label="InF_6"></rect>
											<g class="Figuroj_group_12" id="g8620" inkscape:label="12_Figuroj_6" style="display:none" inkscape:highlight-color="#58392b" transform="translate(135.04778,-54)">
												<rect class="Figuroj_12" id="rect8614" inkscape:label="12_3_6" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect8616" inkscape:label="12_2_6" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect8618" inkscape:label="12_1_6" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g8628" inkscape:label="simboloj_12_6" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(135.39677,-54)">
												<text class="skr-sign simb altgr FR" id="text7911" xml:space="preserve" inkscape:label="12_Sim_6_AltGr_FR" x="232.50911" y="87.811966" style="white-space:pre;inline-size:42.3609;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)"><tspan id="tspan7501" x="232.50911" y="87.811966">|</tspan></text>
												<text class="skr-sign simb altgr ES" id="text8622" xml:space="preserve" inkscape:label="12_Sim_6_AltGr_ES" x="232.50911" y="87.811966" style="white-space:pre;inline-size:42.3609;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)"><tspan id="tspan7503" x="232.50911" y="87.811966">¬</tspan></text>
												<text class="skr-sign simb shift FR" id="text7915" xml:space="preserve" inkscape:label="12_Sim_6_Shift_FR" x="226.00742" y="72.848473" style="display:inline">6</text>
												<text class="skr-sign simb shift ES LA DE" id="text1719" xml:space="preserve" inkscape:label="12_Sim_6_Shift_ES-LA-DE" x="226.00742" y="72.848473" style="display:inline">&amp;</text>
												<text class="skr-sign simb shift EN" id="text8624" xml:space="preserve" inkscape:label="12_Sim_6_Shift_EN" x="226.00742" y="72.848473" style="display:none">^</text>
												<text class="skr-sign FR" id="text7913" xml:space="preserve" inkscape:label="12_Sim_6_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">-</text>
												<text class="skr-sign num" id="text8626" xml:space="preserve" inkscape:label="12_Sim_6" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">6</text>
											</g>
										</g>
										<g class="keycap" id="Key_7" transform="translate(15,15)" inkscape:label="Key_7" style="display:inline">
											<rect class="outer border" id="OutB_7" x="379" y="1" width="52" height="52" rx="5" inkscape:label="OutB_7"></rect>
											<rect class="outer fill" id="OutF_7" x="379" y="1" width="52" height="52" rx="5" inkscape:label="OutF_7"></rect>
											<rect class="inner border" id="InB_7" x="385" y="4" width="40" height="40" rx="5" inkscape:label="InB_7"></rect>
											<rect class="inner fill" id="InF_7" x="385" y="4" width="40" height="40" rx="5" inkscape:label="InF_7"></rect>
											<g class="Figuroj_group_12" id="g8676" inkscape:label="12_Figuroj_7" style="display:none" inkscape:highlight-color="#58392b" transform="translate(188.99259,-54)">
												<rect class="Figuroj_12" id="rect8670" inkscape:label="12_3_7" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect8672" inkscape:label="12_2_7" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect8674" inkscape:label="12_1_7" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g8684" inkscape:label="simboloj_12_7" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(189.34158,-54)">
												<text class="skr-sign simb altgr DE" id="text2028" xml:space="preserve" inkscape:label="12_Sim_7_AltGr_DE" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">{</text>
												<text class="skr-sign simb altgr FR" id="text7917" xml:space="preserve" inkscape:label="12_Sim_7_AltGr_FR" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">`</text>
												<text class="skr-sign simb shift FR" id="text7921" xml:space="preserve" inkscape:label="12_Sim_7_Shift_FR" x="226.00742" y="72.848473">7</text>
												<text class="skr-sign simb shift ES LA DE" id="text1769" xml:space="preserve" inkscape:label="12_Sim_7_Shift_ES-LA-DE" x="226.00742" y="72.848473" style="display:inline">/</text>
												<text class="skr-sign simb shift EN" id="text8680" xml:space="preserve" inkscape:label="12_Sim_7_Shift_EN" x="226.00742" y="72.848473" style="display:inline">&amp;</text>
												<text class="skr-sign FR" id="text7975" xml:space="preserve" inkscape:label="12_Sim_7_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">è</text>
												<text class="skr-sign num" id="text8682" xml:space="preserve" inkscape:label="12_Sim_7" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">7</text>
											</g>
										</g>
										<g class="keycap" id="Key_8" transform="translate(15,15)" inkscape:label="Key_8" style="display:inline">
											<rect class="outer border" id="OutB_8" x="433" y="1" width="52" height="52" rx="5" inkscape:label="OutB_8"></rect>
											<rect class="outer fill" id="OutF_8" x="433" y="1" width="52" height="52" rx="5" inkscape:label="OutF_8"></rect>
											<rect class="inner border" id="InB_8" x="439" y="4" width="40" height="40" rx="5" inkscape:label="InB_8"></rect>
											<rect class="inner fill" id="InF_8" x="439" y="4" width="40" height="40" rx="5" inkscape:label="InF_8"></rect>
											<g class="Figuroj_group_12" id="g8708" inkscape:label="12_Figuroj_8" style="display:none" inkscape:highlight-color="#58392b" transform="translate(242.99259,-54)">
												<rect class="Figuroj_12" id="rect8702" inkscape:label="12_3_8" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect8704" inkscape:label="12_2_8" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect8706" inkscape:label="12_1_8" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g8716" inkscape:label="simboloj_12_8" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(243.34158,-54)">
												<text class="skr-sign simb altgr DE" id="text2031" xml:space="preserve" inkscape:label="12_Sim_8_AltGr_DE" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">[</text>
												<text class="skr-sign simb altgr FR" id="text9516" xml:space="preserve" inkscape:label="12_Sim_8_AltGr_FR" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">\</text>
												<text class="skr-sign simb shift FR" id="text9520" xml:space="preserve" inkscape:label="12_Sim_8_Shift_FR" x="226.00742" y="72.848473">8</text>
												<text class="skr-sign simb shift ES LA DE" id="text1776" xml:space="preserve" inkscape:label="12_Sim_8_Shift_ES-LA-DE" x="226.00742" y="72.848473" style="display:inline">(</text>
												<text class="skr-sign simb shift EN" id="text8712" xml:space="preserve" inkscape:label="12_Sim_8_Shift_EN" x="226.00742" y="72.848473" style="display:inline">*</text>
												<text class="skr-sign FR" id="text9518" xml:space="preserve" inkscape:label="12_Sim_8_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">_</text>
												<text class="skr-sign num" id="text8714" xml:space="preserve" inkscape:label="12_Sim_8" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">8</text>
											</g>
										</g>
										<g class="keycap" id="Key_9" transform="translate(15,15)" inkscape:label="Key_9" style="display:inline">
											<rect class="outer border" id="OutB_9" x="487" y="1" width="52" height="52" rx="5" inkscape:label="OutB_9"></rect>
											<rect class="outer fill" id="OutF_9" x="487" y="1" width="52" height="52" rx="5" inkscape:label="OutF_9"></rect>
											<rect class="inner border" id="InB_9" x="493" y="4" width="40" height="40" rx="5" inkscape:label="InB_9"></rect>
											<rect class="inner fill" id="InF_9" x="493" y="4" width="40" height="40" rx="5" inkscape:label="InF_9"></rect>
											<g class="Figuroj_group_12" id="g10093" inkscape:label="12_Figuroj_9" style="display:none" inkscape:highlight-color="#58392b" transform="translate(296.99258,-54)">
												<rect class="Figuroj_12" id="rect10087" inkscape:label="12_3_9" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect10089" inkscape:label="12_2_9" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect10091" inkscape:label="12_1_9" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g10101" inkscape:label="simboloj_12_9" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(297.34157,-54)">
												<text class="skr-sign simb altgr DE" id="text2034" xml:space="preserve" inkscape:label="12_Sim_9_AltGr_DE" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">]</text>
												<text class="skr-sign simb altgr FR" id="text10095" xml:space="preserve" inkscape:label="12_Sim_9_AltGr_FR" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">^</text>
												<text class="skr-sign simb shift FR" id="text9524" xml:space="preserve" inkscape:label="12_Sim_9_Shift_FR" x="226.00742" y="72.848473">9</text>
												<text class="skr-sign simb shift ES LA DE" id="text1781" xml:space="preserve" inkscape:label="12_Sim_9_Shift_ES-LA-DE" x="226.00742" y="72.848473" style="display:inline">)</text>
												<text class="skr-sign simb shift EN" id="text10097" xml:space="preserve" inkscape:label="12_Sim_9_Shift_EN" x="226.00742" y="72.848473" style="display:none">(</text>
												<text class="skr-sign FR" id="text9522" xml:space="preserve" inkscape:label="12_Sim_9_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">ç</text>
												<text class="skr-sign num" id="text10099" xml:space="preserve" inkscape:label="12_Sim_9" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">9</text>
											</g>
										</g>
										<g class="keycap" id="Key_0" transform="translate(15,15)" inkscape:label="Key_0" style="display:inline">
											<rect class="outer border" id="OutB_0" x="541" y="1" width="52" height="52" rx="5" inkscape:label="OutB_0"></rect>
											<rect class="outer fill" id="OutF_0" x="541" y="1" width="52" height="52" rx="5" inkscape:label="OutF_0"></rect>
											<rect class="inner border" id="InB_0" x="547" y="4" width="40" height="40" rx="5" inkscape:label="InB_0"></rect>
											<rect class="inner fill" id="InF_0" x="547" y="4" width="40" height="40" rx="5" inkscape:label="InF_0"></rect>
											<g class="Figuroj_group_11" id="g10117" inkscape:label="12_Figuroj_0" style="display:none" inkscape:highlight-color="#58392b" transform="translate(350.99258,-54)">
												<rect class="Figuroj_12" id="rect10111" inkscape:label="12_3_0" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect10113" inkscape:label="12_2_0" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect10115" inkscape:label="12_1_0" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g10125" inkscape:label="simboloj_12_0" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(351.34157,-54)">
												<text class="skr-sign simb altgr DE" id="text2037" xml:space="preserve" inkscape:label="12_Sim_0_AltGr_DE" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">}</text>
												<text class="skr-sign simb altgr FR" id="text10119" xml:space="preserve" inkscape:label="12_Sim_0_AltGr_FR" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">@</text>
												<text class="skr-sign simb shift FR" id="text11071" xml:space="preserve" inkscape:label="12_Sim_0_Shift_FR" x="226.00742" y="72.848473" style="display:inline">0</text>
												<text class="skr-sign simb shift ES LA DE" id="text10121" xml:space="preserve" inkscape:label="12_Sim_0_Shift_ES-LA-DE" x="226.00742" y="72.848473" style="display:inline">=</text>
												<text class="skr-sign simb shift EN" id="text1786" xml:space="preserve" inkscape:label="12_Sim_0_Shift_EN" x="226.00742" y="72.848473" style="display:inline">)</text>
												<text class="skr-sign FR" id="text11069" xml:space="preserve" inkscape:label="12_Sim_0_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">à</text>
												<text class="skr-sign num" id="text10123" xml:space="preserve" inkscape:label="12_Sim_0" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="display:inline;font-size:18.6667px">0</text>
											</g>
										</g>
									</g>
									<g id="Special Keys" inkscape:groupmode="layer" inkscape:label="Special Keys" style="display:inline">
										<g class="keycap ANSI" id="Key_Return" inkscape:label="Key_Return_ANSI" style="display:none" transform="translate(15,15)" inkscape:highlight-color="#2fbeef">
											<rect class="outer border" id="OutB_Return" x="689.5" y="109" width="119.5" height="52" rx="5" inkscape:label="OutB_Return"></rect>
											<rect class="outer fill" id="OutF_Return" x="689.5" y="109" width="119.5" height="52" rx="5" inkscape:label="OutF_Return"></rect>
											<rect class="inner border" id="InB_Return" x="695.5" y="112" width="107.5" height="40" rx="5" inkscape:label="InB_Return"></rect>
											<rect class="inner fill" id="InF_Return" x="695.5" y="112" width="107.5" height="40" rx="5" inkscape:label="InF_Return"></rect>
											<text class="skr-sign" id="text6245" xml:space="preserve" x="749.25757" y="140.81322" inkscape:label="T_Return" style="font-size:21.3333px;display:inline">↵</text>
										</g>
										<g class="  keycap ISO" id="g1934" transform="translate(15,15)" inkscape:label="Key_Return_ISO" style="display:inline" inkscape:highlight-color="#3b9e1f">
											<!-- Outer Border -->
											<rect class="outer border" id="rect1918" x="743.5" y="55" width="65.5" height="106" rx="5" fill="#cccccc" style="stroke:#000000;stroke-width:2"></rect>
											<rect class="outer border" id="rect1920" x="730" y="55" width="79" height="52" rx="5" fill="#cccccc" style="stroke:#000000;stroke-width:2"></rect>
											<!-- Outer Fill -->
											<rect id="rect1922" x="743.5" y="55" width="65.5" height="106" rx="5" fill="#cccccc"></rect>
											<rect id="rect1924" x="730" y="55" width="79" height="52" rx="5" fill="#cccccc"></rect>
											<!-- Inner Border -->
											<rect class="inner border" id="rect1926" x="749.5" y="58" width="53.5" height="94" rx="5" fill="#fcfcfc" style="stroke-width:2"></rect>
											<rect class="inner border" id="rect1928" x="736" y="58" width="67" height="40" rx="5" fill="#fcfcfc" style="stroke-width:2"></rect>
											<!-- Inner Fill -->
											<rect id="rect1930" x="749.5" y="58" width="53.5" height="94" rx="5" fill="#fcfcfc"></rect>
											<rect id="rect1932" x="736" y="58" width="67" height="40" rx="5" fill="#fcfcfc"></rect>
											<text class="skr-sign" id="text2406" xml:space="preserve" x="776.25757" y="116.9015" inkscape:label="T_Return" style="font-size:21.3333px;display:inline">↵</text>
										</g>
										<g class="keycap ANSI" id="Key_LShift" transform="translate(15,15)" inkscape:label="Key_LShift_ANSI" style="display:none" inkscape:highlight-color="#2fbeef">
											<rect class="outer border Key_SHIFT_Out" id="OutB_LShift" x="1" y="163" width="119.5" height="52" rx="5" inkscape:label="OutB_LShift"></rect>
											<rect class="outer fill Key_SHIFT_Out" id="OutF_LShift" x="1" y="163" width="119.5" height="52" rx="5" inkscape:label="OutF_LShift"></rect>
											<rect class="inner border Key_SHIFT_In" id="InB_LShift" x="7" y="166" width="107.5" height="40" rx="5" inkscape:label="InB_LShift"></rect>
											<rect class="inner fill Key_SHIFT_In" id="InF_LShift" x="7" y="166" width="107.5" height="40" rx="5" inkscape:label="InF_LShift"></rect>
											<text class="skr-sign T_Shift" id="T_LShift" xml:space="preserve" x="60.75" y="189" inkscape:label="T_LShift">⇧ Shift</text>
										</g>
										<g class="  keycap ISO" id="g2078" transform="translate(15,15)" style="display:inline" inkscape:label="Key_LShift_ISO" inkscape:highlight-color="#3b9e1f">
											<!-- Outer Border -->
											<rect class="outer border" id="rect2070" x="1" y="163" width="65.5" height="52" rx="5" fill="#00a4a9" style="stroke:#000000;stroke-width:2"></rect>
											<!-- Outer Fill -->
											<rect id="rect2072" x="1" y="163" width="65.5" height="52" rx="5" fill="#00a4a9"></rect>
											<!-- Inner Border -->
											<rect class="inner border" id="rect2074" x="7" y="166" width="53.5" height="40" rx="5" fill="#46c7cc" style="stroke-width:2"></rect>
											<!-- Inner Fill -->
											<rect id="rect2076" x="7" y="166" width="53.5" height="40" rx="5" fill="#46c7cc"></rect>
											<text class="skr-sign T_Shift" id="text2489" xml:space="preserve" x="33.477272" y="188.86363" inkscape:label="T_LShift" style="display:inline">⇧ Shift</text>
										</g>
										<g class="keycap" id="Key_RShift" transform="translate(15,15)" inkscape:label="Key_RShift" style="display:inline">
											<rect class="outer border Key_SHIFT_Out" id="OutB_RShift" x="662.5" y="163" width="146.5" height="52" rx="5" inkscape:label="OutB_RShift"></rect>
											<rect class="outer fill Key_SHIFT_Out" id="OutF_RShift" x="662.5" y="163" width="146.5" height="52" rx="5" inkscape:label="OutF_RShift"></rect>
											<rect class="inner border Key_SHIFT_In" id="InB_RShift" x="668.5" y="166" width="134.5" height="40" rx="5" inkscape:label="InB_RShift"></rect>
											<rect class="inner fill Key_SHIFT_In" id="InF_RShift" x="668.5" y="166" width="134.5" height="40" rx="5" inkscape:label="InF_RShift"></rect>
											<text class="skr-sign T_Shift" id="T_RShift" xml:space="preserve" x="735.75" y="189" inkscape:label="T_RShift">⇧ Shift</text>
										</g>
										<g class="keycap" id="Key_LCtrl" transform="translate(15,15)" inkscape:label="Key_LCtrl" style="display:inline">
											<rect class="outer border" id="OutB_LCtrl" x="1" y="217" width="65.5" height="52" rx="5" inkscape:label="OutB_LCtrl"></rect>
											<rect class="outer fill" id="OutF_LCtrl" x="1" y="217" width="65.5" height="52" rx="5" inkscape:label="OutF_LCtrl"></rect>
											<rect class="inner border" id="InB_LCtrl" x="7" y="220" width="53.5" height="40" rx="5" inkscape:label="InB_LCtrl"></rect>
											<rect class="inner fill" id="InF_LCtrl" x="7" y="220" width="53.5" height="40" rx="5" inkscape:label="InF_LCtrl"></rect>
											<text class="skr-sign T_Ctrl" id="T_LCtrl" xml:space="preserve" x="33.840904" y="244.11577" inkscape:label="T_LCtrl">Ctrl</text>
										</g>
										<g class="keycap" id="Key_LWin" transform="translate(15,15)" inkscape:label="Key_LWin" style="display:inline">
											<rect class="outer border" id="OutB_LWin" x="68.5" y="217" width="65.5" height="52" rx="5" inkscape:label="OutB_LWin"></rect>
											<rect class="outer fill" id="OutF_LWin" x="68.5" y="217" width="65.5" height="52" rx="5" inkscape:label="OutF_LWin"></rect>
											<rect class="inner border" id="InB_LWin" x="74.5" y="220" width="53.5" height="40" rx="5" inkscape:label="InB_LWin"></rect>
											<rect class="inner fill" id="InF_LWin" x="74.5" y="220" width="53.5" height="40" rx="5" inkscape:label="InF_LWin"></rect>
											<text class="skr-sign T_Win" id="T_LWin" xml:space="preserve" x="101.25" y="247.77798" inkscape:label="T_LWin">⊞</text>
										</g>
										<g class="keycap" id="Key_LAlt" transform="translate(15,15)" inkscape:label="Key_LAlt" style="display:inline">
											<rect class="outer border Key_LALT_Out" id="OutB_LAlt" x="136" y="217" width="65.5" height="52" rx="5" inkscape:label="OutB_LAlt"></rect>
											<rect class="outer fill Key_LALT_Out" id="OutF_LAlt" x="136" y="217" width="65.5" height="52" rx="5" inkscape:label="OutF_LAlt"></rect>
											<rect class="inner border Key_LALT_In" id="InB_LAlt" x="142" y="220" width="53.5" height="40" rx="5" inkscape:label="InB_LAlt"></rect>
											<rect class="inner fill Key_LALT_In" id="InF_LAlt" x="142" y="220" width="53.5" height="40" rx="5" inkscape:label="InF_LAlt"></rect>
											<text class="skr-sign" id="T_LAlt" xml:space="preserve" x="168.75" y="244.0779" inkscape:label="T_LAlt">Alt</text>
										</g>
										<g class="keycap" id="Key_Space" transform="translate(15,15)" inkscape:label="Key_Space" style="display:inline">
											<rect class="outer border" id="OutB_Space" x="203.5" y="217" width="335.5" height="52" rx="5" inkscape:label="OutB_Space"></rect>
											<rect class="outer fill" id="OutF_Space" x="203.5" y="217" width="335.5" height="52" rx="5" inkscape:label="OutF_Space"></rect>
											<rect class="inner border" id="InB_Space" x="209.5" y="220" width="323.5" height="40" rx="5" inkscape:label="InB_Space"></rect>
											<rect class="inner fill" id="InF_Space" x="209.5" y="220" width="323.5" height="40" rx="5" inkscape:label="InF_Space" style="fill:url(#meshgradient5745);fill-opacity:1"></rect>
										</g>
										<g class="keycap" id="Key_RAlt" transform="translate(15,15)" inkscape:label="Key_RAlt" style="display:inline">
											<rect class="outer border Key_RALT_Out" id="OutB_RAlt" x="541" y="217" width="65.5" height="52" rx="5" inkscape:label="OutB_RAlt"></rect>
											<rect class="outer fill Key_RALT_Out" id="OutF_RAlt" x="541" y="217" width="65.5" height="52" rx="5" inkscape:label="OutF_RAlt"></rect>
											<rect class="inner border Key_RALT_In" id="InB_RAlt" x="547" y="220" width="53.5" height="40" rx="5" inkscape:label="InB_RAlt"></rect>
											<rect class="inner fill Key_RALT_In" id="InF_RAlt" x="547" y="220" width="53.5" height="40" rx="5" inkscape:label="InF_RAlt"></rect>
											<text class="skr-sign T_RAlt" id="T_RAlt" xml:space="preserve" x="572.75" y="244.0779" inkscape:label="T_RAlt">Alt</text>
										</g>
										<g class="keycap" id="Key_RWin" transform="translate(15,15)" inkscape:label="Key_RWin" style="display:inline">
											<rect class="outer border" id="OutB_RWin" x="608.5" y="217" width="65.5" height="52" rx="5" inkscape:label="OutB_RWin"></rect>
											<rect class="outer fill" id="OutF_RWin" x="608.5" y="217" width="65.5" height="52" rx="5" inkscape:label="OutF_RWin"></rect>
											<rect class="inner border" id="InB_RWin" x="614.5" y="220" width="53.5" height="40" rx="5" inkscape:label="InB_RWin"></rect>
											<rect class="inner fill" id="InF_RWin" x="614.5" y="220" width="53.5" height="40" rx="5" inkscape:label="InF_RWin"></rect>
											<text class="skr-sign T_Win" id="T_RWin" xml:space="preserve" x="641.25" y="247.77798" inkscape:label="T_RWin">⊞</text>
										</g>
										<g class="keycap" id="Key_Menu" transform="translate(15,15)" inkscape:label="Key_Menu" style="display:inline">
											<rect class="outer border" id="OutB_Menu" x="676" y="217" width="65.5" height="52" rx="5" inkscape:label="OutB_Menu"></rect>
											<rect class="outer fill" id="OutF_Menu" x="676" y="217" width="65.5" height="52" rx="5" inkscape:label="OutF_Menu"></rect>
											<rect class="inner border" id="InB_Menu" x="682" y="220" width="53.5" height="40" rx="5" inkscape:label="InB_Menu"></rect>
											<rect class="inner fill" id="InF_Menu" x="682" y="220" width="53.5" height="40" rx="5" inkscape:label="InF_Menu"></rect>
											<text class="skr-sign" id="T_Menu" xml:space="preserve" x="707.25" y="247.7897" inkscape:label="T_Menu">≣</text>
										</g>
										<g class="keycap" id="Key_RCtrl" transform="translate(15,15)" inkscape:label="Key_RCtrl" style="display:inline">
											<rect class="outer border" id="OutB_RCtrl" x="743.5" y="217" width="65.5" height="52" rx="5" inkscape:label="OutB_RCtrl"></rect>
											<rect class="outer fill" id="OutF_RCtrl" x="743.5" y="217" width="65.5" height="52" rx="5" inkscape:label="OutF_RCtrl"></rect>
											<rect class="inner border" id="InB_RCtrl" x="749.5" y="220" width="53.5" height="40" rx="5" inkscape:label="InB_RCtrl"></rect>
											<rect class="inner fill" id="InF_RCtrl" x="749.5" y="220" width="53.5" height="40" rx="5" inkscape:label="InF_RCtrl"></rect>
											<text class="skr-sign" id="T_RCtrl" xml:space="preserve" x="776.75" y="244.0779" inkscape:label="T_RCtrl">Ctrl</text>
										</g>
										<g class="keycap" id="Key_CAPSLock" transform="translate(15,15)" inkscape:label="Key_CAPSLock" style="display:inline">
											<rect class="outer border K_CAPSLock_Out" id="OutB_CAPSLock" x="1" y="109" width="92.5" height="52" rx="5" inkscape:label="OutB_CAPSLock"></rect>
											<rect class="outer fill K_CAPSLock_Out" id="OutF_CAPSLock" x="1" y="109" width="92.5" height="52" rx="5" inkscape:label="OutF_CAPSLock"></rect>
											<rect class="inner border K_CAPSLock_In" id="InB_CAPSLock" x="7" y="112" width="80.5" height="40" rx="5" inkscape:label="InB_CAPSLock"></rect>
											<rect class="inner fill K_CAPSLock_In" id="InF_CAPSLock" x="7" y="112" width="80.5" height="40" rx="5" inkscape:label="InF_CAPSLock"></rect>
											<text class="skr-sign" id="T_CAPSLock" xml:space="preserve" x="47.25" y="135" inkscape:label="T_CAPSLock">⇪ Caps Lock</text>
										</g>
										<g class="keycap" id="Key_Backspace" transform="translate(15,15)" inkscape:label="Key_Backspace" style="display:inline">
											<rect class="outer border" id="OutB_Backspace" x="703" y="1" width="106" height="52" rx="5" inkscape:label="OutB_Backspace"></rect>
											<rect class="outer fill" id="OutF_Backspace" x="703" y="1" width="106" height="52" rx="5" inkscape:label="OutF_Backspace"></rect>
											<rect class="inner border" id="InB_Backspace" x="709" y="4" width="94" height="40" rx="5" inkscape:label="InB_Backspace"></rect>
											<rect class="inner fill" id="InF_Backspace" x="709" y="4" width="94" height="40" rx="5" inkscape:label="InF_Backspace"></rect>
											<text class="skr-sign" id="text6234" xml:space="preserve" x="755.53979" y="30.477272" inkscape:label="T_Backspace" style="font-size:21.3333px;display:inline">⌫</text>
										</g>
										<g class="keycap" id="Key_Tab" transform="translate(15,15)" inkscape:label="Key_Tab" style="display:inline">
											<rect class="outer border" id="OutB_Tab" x="1" y="55" width="79" height="52" rx="5" inkscape:label="OutB_Tab"></rect>
											<rect class="outer fill" id="OutF_Tab" x="1" y="55" width="79" height="52" rx="5" inkscape:label="OutF_Tab"></rect>
											<rect class="inner border" id="InB_Tab" x="7" y="58" width="67" height="40" rx="5" inkscape:label="InB_Tab"></rect>
											<rect class="inner fill" id="InF_Tab" x="7" y="58" width="67" height="40" rx="5" inkscape:label="InF_Tab"></rect>
											<text class="skr-sign" id="T_Tab" xml:space="preserve" x="55.57851" y="100.75781" style="display:inline" transform="translate(-15,-15)">↹</text>
										</g>
									</g>
									<g id="Symbol_Keys" inkscape:groupmode="layer" inkscape:label="Symbol Keys" style="display:inline">
										<g class="keycap" id="Key_BKQuote" style="display:inline" transform="translate(15,15)" inkscape:label="Key_BKQuote">
											<rect class="outer border" id="OutB_BKQuote" x="1" y="1" width="52" height="52" rx="5" style="display:inline" inkscape:label="OutB_BKQuote"></rect>
											<rect class="outer fill" id="OutF_BKQuote" x="1" y="1" width="52" height="52" rx="5" style="display:inline" inkscape:label="OutF_BKQuote"></rect>
											<rect class="inner border" id="InB_BKQuote" x="7" y="4" width="40" height="40" rx="5" style="display:inline" inkscape:label="InB_BKQuote"></rect>
											<rect class="inner fill" id="InF_BKQuote" x="7" y="4" width="40" height="40" rx="5" style="display:inline" inkscape:label="InF_BKQuote"></rect>
											<g class="Figuroj_group_12" id="g1473" inkscape:label="12_Figuroj_BKQuote" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-189.00741,-54)">
												<rect class="Figuroj_12" id="rect1467" inkscape:label="12_3_BKQuote" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect1469" inkscape:label="12_2_BKQuote" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect1471" inkscape:label="12_1_BKQuote" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g4875" inkscape:label="simboloj_12_BKQuote" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-188.65842,-54)">
												<text class="skr-sign altgr LA" id="text2013" xml:space="preserve" inkscape:label="12_Sim_BKQuote_AltGr_LA" x="232.50911" y="87.811966" style="font-size:16px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">¬</text>
												<text class="skr-sign altgr ES" id="text1475" xml:space="preserve" inkscape:label="12_Sim_BKQuote_AltGr_ES" x="232.50911" y="87.811966" style="font-size:16px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">\</text>
												<text class="skr-sign LA DE simb shift" id="text2010" xml:space="preserve" inkscape:label="12_Sim_BKQuote_Shift_LA-DE" x="226.00742" y="72.848473" style="display:inline">°</text>
												<text class="skr-sign ES simb shift" id="text1477" xml:space="preserve" inkscape:label="12_Sim_BKQuote_Shift_ES" x="226.00742" y="72.848473" style="display:inline">ª</text>
												<text class="skr-sign EN FR simb shift" id="text4871" xml:space="preserve" inkscape:label="12_Sim_BKQuote_Shift_EN-FR" x="226.00742" y="72.848473" style="display:inline">~</text>
												<text class="skr-sign DE simb" id="text31942" xml:space="preserve" inkscape:label="12_Sim_BKQuote_DE" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">^</text>
												<text class="skr-sign LA simb" id="text1905" xml:space="preserve" inkscape:label="12_Sim_BKQuote_LA" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">|</text>
												<text class="skr-sign FR simb" id="text12624" xml:space="preserve" inkscape:label="12_Sim_BKQuote_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">²</text>
												<text class="skr-sign ES simb" id="text1479" xml:space="preserve" inkscape:label="12_Sim_BKQuote_ES" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">º</text>
												<text class="skr-sign EN simb" id="text4873" xml:space="preserve" inkscape:label="12_Sim_BKQuote_EN" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">`</text>
											</g>
										</g>
										<g class="keycap" id="Key_Hyphen" transform="translate(15,15)" inkscape:label="Key_Hyphen" style="display:inline">
											<rect class="outer border" id="OutB_Hyphen" x="595" y="1" width="52" height="52" rx="5" inkscape:label="OutB_Hyphen"></rect>
											<rect class="outer fill" id="OutF_Hyphen" x="595" y="1" width="52" height="52" rx="5" inkscape:label="OutF_Hyphen"></rect>
											<rect class="inner border" id="InB_Hyphen" x="601" y="4" width="40" height="40" rx="5" inkscape:label="InB_Hyphen"></rect>
											<rect class="inner fill" id="InF_Hyphen" x="601" y="4" width="40" height="40" rx="5" inkscape:label="InF_Hyphen"></rect>
											<g class="Figuroj_group_12" id="g1673" inkscape:label="12_Figuroj_BKQuote" style="display:none" inkscape:highlight-color="#58392b" transform="translate(404.99258,-54.001159)">
												<rect class="Figuroj_12" id="rect1667" inkscape:label="12_3_BKQuote" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect1669" inkscape:label="12_2_BKQuote" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect1671" inkscape:label="12_1_BKQuote" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g1681" inkscape:label="simboloj_12_Hyphen" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(405.34157,-54.001159)">
												<text class="skr-sign altgr FR" id="text3344" xml:space="preserve" inkscape:label="12_Sim_Hyphen_AltGr_FR" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">]</text>
												<text class="skr-sign altgr LA DE" id="text9057" xml:space="preserve" inkscape:label="12_Sim_Hyphen_AltGr_LA-DE" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">\</text>
												<text class="skr-sign simb shift FR" id="text12678" xml:space="preserve" inkscape:label="12_Sim_Hyphen_Shift_FR" x="226.00742" y="72.848473" style="display:inline">°</text>
												<text class="skr-sign simb shift ES LA DE" id="text3346" xml:space="preserve" inkscape:label="12_Sim_Hyphen_Shift_ES-LA-DE" x="226.00742" y="72.848473" style="display:inline">?</text>
												<text class="skr-sign simb shift EN" id="text1677" xml:space="preserve" inkscape:label="12_Sim_Hyphen_Shift_EN" x="226.00742" y="72.848473">°</text>
												<text class="skr-sign DE simb" id="text2043" xml:space="preserve" inkscape:label="12_Sim_Hyphen_DE" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">ß</text>
												<text class="skr-sign FR simb" id="text12672" xml:space="preserve" inkscape:label="12_Sim_Hyphen_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">)</text>
												<text class="skr-sign ES LA simb" id="text3348" xml:space="preserve" inkscape:label="12_Sim_Hyphen_ES-LA" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">'</text>
												<text class="skr-sign EN simb" id="text1679" xml:space="preserve" inkscape:label="12_Sim_Hyphen_EN" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">-</text>
											</g>
										</g>
										<g class="keycap" id="Key_Equal" transform="translate(15,15)" inkscape:label="Key_Equal" style="display:inline">
											<rect class="outer border" id="OutB_Equal" x="649" y="1" width="52" height="52" rx="5" inkscape:label="OutB_Equal"></rect>
											<rect class="outer fill" id="OutF_Equal" x="649" y="1" width="52" height="52" rx="5" inkscape:label="OutF_Equal"></rect>
											<rect class="inner border" id="InB_Equal" x="655" y="4" width="40" height="40" rx="5" inkscape:label="InB_Equal"></rect>
											<rect class="inner fill" id="InF_Equal" x="655" y="4" width="40" height="40" rx="5" inkscape:label="InF_Equal"></rect>
											<g class="Figuroj_group_12" id="g1697" inkscape:label="12_Figuroj_BKQuote" style="display:none" inkscape:highlight-color="#58392b" transform="translate(459.04778,-54.001159)">
												<rect class="Figuroj_12" id="rect1691" inkscape:label="12_3_BKQuote" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect1693" inkscape:label="12_2_BKQuote" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect1695" inkscape:label="12_1_BKQuote" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g3360" inkscape:label="simboloj_12_Equal" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(459.39677,-54.001159)">
												<text class="skr-sign altgr FR" id="text3354" xml:space="preserve" inkscape:label="12_Sim_Equal_AltGr_FR" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">}</text>
												<text class="skr-sign LA simb shift" id="text10814" xml:space="preserve" inkscape:label="12_Sim_Equal_Shift_LA" x="226.00742" y="72.848473" style="display:inline">¡</text>
												<text class="skr-sign ES simb shift" id="text3356" xml:space="preserve" inkscape:label="12_Sim_Equal_Shift_ES" x="226.00742" y="72.848473">¿</text>
												<text class="skr-sign EN FR simb shift" id="text1701" xml:space="preserve" inkscape:label="12_Sim_Equal_Shift_EN-FR" x="226.00742" y="72.848473" style="display:inline">+</text>
												<text class="skr-sign LA simb" id="text10811" xml:space="preserve" inkscape:label="12_Sim_Equal_LA" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">¿</text>
												<text class="skr-sign ES simb" id="text3358" xml:space="preserve" inkscape:label="12_Sim_Equal_ES" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">¡</text>
												<text class="skr-sign EN FR simb" id="text1703" xml:space="preserve" inkscape:label="12_Sim_Equal_EN-FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">=</text>
											</g>
										</g>
										<g class="keycap" id="g292" transform="translate(15,15)" inkscape:label="Key_LBrkt" style="display:inline">
											<rect class="outer border" id="OutB_LBrkt" x="622" y="55" width="52" height="52" rx="5" inkscape:label="OutB_LBrkt"></rect>
											<rect class="outer fill" id="OutF_LBrkt" x="622" y="55" width="52" height="52" rx="5" inkscape:label="OutF_LBrkt"></rect>
											<rect class="inner border" id="InB_LBrkt" x="628" y="58" width="40" height="40" rx="5" inkscape:label="InB_LBrkt"></rect>
											<rect class="inner fill" id="InF_LBrkt" x="628" y="58" width="40" height="40" rx="5" inkscape:label="InF_LBrkt"></rect>
											<g class="Figuroj_group_12" id="g3123" inkscape:label="12_Figuroj_BKQuote" style="display:none" inkscape:highlight-color="#58392b" transform="translate(431.99259)">
												<rect class="Figuroj_12" id="rect3117" inkscape:label="12_3_BKQuote" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3119" inkscape:label="12_2_BKQuote" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3121" inkscape:label="12_1_BKQuote" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g3131" inkscape:label="simboloj_12_LBrkt" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(432.34158)">
												<text class="skr-sign altgr ES" id="text3125" xml:space="preserve" inkscape:label="12_Sim_LBrkt_AltGr_ES" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">[</text>
												<text class="skr-sign DE simb shift" id="text7510" xml:space="preserve" inkscape:label="12_Sim_LBrkt_Shift_DE" x="226.00742" y="72.848473" style="display:inline">Ü</text>
												<text class="skr-sign FR LA simb shift" id="text14233" xml:space="preserve" inkscape:label="12_Sim_LBrkt_Shift_FR-LA" x="226.00742" y="72.848473" style="display:inline">¨</text>
												<text class="skr-sign ES simb shift" id="text3127" xml:space="preserve" inkscape:label="12_Sim_LBrkt_Shift_ES" x="226.00742" y="72.848473">^</text>
												<text class="skr-sign EN simb shift" id="text1812" xml:space="preserve" inkscape:label="12_Sim_LBrkt_Shift_EN" x="226.00742" y="72.848473" style="display:inline">{</text>
												<text class="skr-sign DE simb" id="text7505" xml:space="preserve" inkscape:label="12_Sim_LBrkt_DE" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">ü</text>
												<text class="skr-sign LA simb" id="text16079" xml:space="preserve" inkscape:label="12_Sim_LBrkt_LA" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">´</text>
												<text class="skr-sign FR simb" id="text14230" xml:space="preserve" inkscape:label="12_Sim_LBrkt_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">^</text>
												<text class="skr-sign ES simb" id="text3129" xml:space="preserve" inkscape:label="12_Sim_LBrkt_ES" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">`</text>
												<text class="skr-sign EN simb" id="text1814" xml:space="preserve" inkscape:label="12_Sim_LBrkt_EN" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">[</text>
											</g>
										</g>
										<g class="keycap" id="g302" transform="translate(15,15)" inkscape:label="Key_RBrkt" style="display:inline">
											<rect class="outer border" id="OutB_RBrkt" x="676" y="55" width="52" height="52" rx="5" inkscape:label="OutB_RBrkt"></rect>
											<rect class="outer fill" id="OutF_RBrkt" x="676" y="55" width="52" height="52" rx="5" inkscape:label="OutF_RBrkt"></rect>
											<rect class="inner border" id="InB_RBrkt" x="682" y="58" width="40" height="40" rx="5" inkscape:label="InB_RBrkt"></rect>
											<rect class="inner fill" id="InF_RBrkt" x="682" y="58" width="40" height="40" rx="5" inkscape:label="InF_RBrkt"></rect>
											<g class="Figuroj_group_12" id="g3147" inkscape:label="12_Figuroj_BKQuote" style="display:none" inkscape:highlight-color="#58392b" transform="translate(485.99259)">
												<rect class="Figuroj_12" id="rect3141" inkscape:label="12_3_BKQuote" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3143" inkscape:label="12_2_BKQuote" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3145" inkscape:label="12_1_BKQuote" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g3365" inkscape:label="simboloj_12_RBrkt" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(486.34158)">
												<text class="skr-sign LA DE altgr" id="text16076" xml:space="preserve" inkscape:label="12_Sim_RBrkt_AltGr_LA" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">~</text>
												<text class="skr-sign FR altgr" id="text1813" xml:space="preserve" inkscape:label="12_Sim_RBrkt_AltGr_FR" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">¤</text>
												<text class="skr-sign ES altgr" id="text3149" xml:space="preserve" inkscape:label="12_Sim_RBrkt_AltGr_ES" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">]</text>
												<text class="skr-sign FR simb shift" id="text1810" xml:space="preserve" inkscape:label="12_Sim_RBrkt_Shift_FR" x="226.00742" y="72.848473" style="display:inline">£</text>
												<text class="skr-sign ES LA DE simb shift" id="text3151" xml:space="preserve" inkscape:label="12_Sim_RBrkt_Shift_ES-LA-DE" x="226.00742" y="72.848473" style="display:inline">*</text>
												<text class="skr-sign EN simb shift" id="text3361" xml:space="preserve" inkscape:label="12_Sim_RBrkt_Shift_EN" x="226.00742" y="72.848473">}</text>
												<text class="skr-sign FR simb" id="text1705" xml:space="preserve" inkscape:label="12_Sim_RBrkt_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">$</text>
												<text class="skr-sign ES LA DE simb" id="text3153" xml:space="preserve" inkscape:label="12_Sim_RBrkt_ES-LA-DE" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">+</text>
												<text class="skr-sign EN simb" id="text3363" xml:space="preserve" inkscape:label="12_Sim_RBrkt_EN" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">]</text>
											</g>
										</g>
										<g class="  keycap ISO" id="g2068" transform="translate(15,15)" inkscape:label="Key_RBrkt_ISO" style="display:inline" inkscape:highlight-color="#3b9e1f">
											<!-- Outer Border -->
											<rect class="outer border" id="rect2060" x="689.5" y="109" width="52" height="52" rx="5" fill="#cccccc" style="stroke:#000000;stroke-width:2"></rect>
											<!-- Outer Fill -->
											<rect id="rect2062" x="689.5" y="109" width="52" height="52" rx="5" fill="#cccccc" style="display:inline"></rect>
											<!-- Inner Border -->
											<rect class="inner border" id="rect2064" x="695.5" y="112" width="40" height="40" rx="5" fill="#fcfcfc" style="stroke-width:2"></rect>
											<!-- Inner Fill -->
											<rect id="rect2066" x="695.5" y="112" width="40" height="40" rx="5" fill="#fcfcfc"></rect>
											<g class="Figuroj_group_12" id="g1767" inkscape:label="12_Figuroj_BKQuote" style="display:none" inkscape:highlight-color="#58392b" transform="translate(499.49258,54)">
												<rect class="Figuroj_12" id="rect1761" inkscape:label="12_3_BKQuote" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect1763" inkscape:label="12_2_BKQuote" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect1765" inkscape:label="12_1_BKQuote" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g1776" inkscape:label="simboloj_12_RBrkt" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(499.84157,54)">
												<text class="skr-sign altgr LA" id="text19604" xml:space="preserve" inkscape:label="12_Sim_RBrkt_AltGr_LA" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">`</text>
												<text class="skr-sign altgr ES" id="text1770" xml:space="preserve" inkscape:label="12_Sim_RBrkt_AltGr_ES" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">}</text>
												<text class="skr-sign DE simb shift" id="text5722" xml:space="preserve" inkscape:label="12_Sim_RBrkt_Shift_DE" x="226.00742" y="72.848473" style="display:inline">'</text>
												<text class="skr-sign LA simb shift" id="text19612" xml:space="preserve" inkscape:label="12_Sim_RBrkt_Shift_LA" x="226.00742" y="72.848473" style="display:inline">]</text>
												<text class="skr-sign FR simb shift" id="text1828" xml:space="preserve" inkscape:label="12_Sim_RBrkt_Shift_FR" x="226.00742" y="72.848473" style="display:inline">µ</text>
												<text class="skr-sign ES simb shift" id="text1772" xml:space="preserve" inkscape:label="12_Sim_RBrkt_Shift_ES" x="226.00742" y="72.848473" style="display:inline">Ç</text>
												<text class="skr-sign DE simb" id="text5719" xml:space="preserve" inkscape:label="12_Sim_RBrkt_DE" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">#</text>
												<text class="skr-sign LA simb" id="text19609" xml:space="preserve" inkscape:label="12_Sim_RBrkt_LA" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">}</text>
												<text class="skr-sign FR simb" id="text1774" xml:space="preserve" inkscape:label="12_Sim_RBrkt_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">*</text>
												<text class="skr-sign ES simb" id="text1826" xml:space="preserve" inkscape:label="12_Sim_RBrkt_ES" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">ç</text>
											</g>
										</g>
										<g class="keycap ANSI" id="g312" transform="translate(15,15)" inkscape:label="Key_BkSlash_ANSI" style="display:inline" inkscape:highlight-color="#2fbeef">
											<rect class="outer border" id="OutB_BkSlash" x="730" y="55" width="79" height="52" rx="5" inkscape:label="OutB_BkSlash"></rect>
											<rect class="outer fill" id="OutF_BkSlash" x="730" y="55" width="79" height="52" rx="5" inkscape:label="OutF_BkSlash"></rect>
											<rect class="inner border" id="InB_BkSlash" x="736" y="58" width="67" height="40" rx="5" inkscape:label="InB_BkSlash"></rect>
											<rect class="inner fill" id="InF_BkSlash" x="736" y="58" width="67" height="40" rx="5" inkscape:label="InF_BkSlash"></rect>
											<g class="Figuroj_group_12" id="g3171" inkscape:label="12_Figuroj_BkSlash" style="display:none" inkscape:highlight-color="#58392b" transform="translate(553.49259)">
												<rect class="Figuroj_12" id="rect3165" inkscape:label="12_3_BkSlash" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3167" inkscape:label="12_2_BkSlash" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3169" inkscape:label="12_1_BkSlash" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g3179" inkscape:label="simboloj_12_BkSlash" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(553.84158)">
												<text class="skr-sign altgr" id="text3173" xml:space="preserve" inkscape:label="12_Sim_BkSlash_AltGr" x="232.50911" y="87.811966" style="font-size:16px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">μ</text>
												<text class="skr-sign EN simb shift" id="text3175" xml:space="preserve" inkscape:label="12_Sim_BkSlash_Shift" x="226.00742" y="72.848473">|</text>
												<text class="skr-sign EN simb" id="text3177" xml:space="preserve" inkscape:label="12_Sim_BkSlash" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">\</text>
											</g>
										</g>
										<g class="keycap" id="g426" transform="translate(15,15)" inkscape:label="Key_Colon" style="display:inline">
											<rect class="outer border" id="OutB_Colon" x="581.5" y="109" width="52" height="52" rx="5" inkscape:label="OutB_Colon"></rect>
											<rect class="outer fill" id="OutF_Colon" x="581.5" y="109" width="52" height="52" rx="5" inkscape:label="OutF_Colon"></rect>
											<rect class="inner border" id="InB_Colon" x="587.5" y="112" width="40" height="40" rx="5" inkscape:label="InB_Colon"></rect>
											<rect class="inner fill" id="InF_Colon" x="587.5" y="112" width="40" height="40" rx="5" inkscape:label="InF_Colon"></rect>
											<g class="neorigina FR" id="Key_Colon_FR(M)" style="display:none" transform="translate(135,-54)" inkscape:label="Key_Colon_FR(M)">
												<g class="Figuroj_group_33" id="33_Figuroj_M" inkscape:label="33_Figuroj_M" style="display:none" inkscape:highlight-color="#58392b" transform="translate(256.49259,108)" sodipodi:insensitive="true">
													<rect class="Figuroj_33" id="33_9_M" inkscape:label="33_9_M" width="16" height="13.15" x="235" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="33_8_M" inkscape:label="33_8_M" width="16" height="13.425" x="235" y="86.425003" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="33_7_M" inkscape:label="33_7_M" width="16" height="13.425" x="235" y="73" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="33_Figuroj_Gr" id="33_6_M" inkscape:label="33_6_M" width="8" height="13.15" x="212" y="84.849998" rx="4"></rect>
													<rect class="33_Figuroj_Gr" id="33_5_M" inkscape:label="33_5_M" width="8" height="13.424991" x="212" y="71.425003" rx="3.9640629"></rect>
													<rect class="33_Figuroj_Gr" id="33_4_M" inkscape:label="33_4_M" width="8" height="13.425003" x="212" y="58" rx="4"></rect>
													<rect class="Figuroj_33" id="33_3_M" inkscape:label="33_3_M" width="16" height="13.15" x="211" y="99.849998" rx="5" transform="translate(-15,-15)"></rect>
													<rect class="Figuroj_33" id="33_2_M" inkscape:label="33_2_M" width="16" height="13.424997" x="196" y="71.425003" rx="5"></rect>
													<rect class="Figuroj_33" id="33_1_M" inkscape:label="33_1_M" width="16" height="13.425" x="196" y="58" rx="5"></rect>
												</g>
												<g class="Figuroj_group_22" id="g4967" inkscape:label="22_Figuroj_M" style="display:none" inkscape:highlight-color="#58392b" transform="translate(256.49259,108)" sodipodi:insensitive="true">
													<rect class="Figuroj_22" id="22_4_M" inkscape:label="22_4_M" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_3_M" inkscape:label="22_3_M" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_2_M" inkscape:label="22_2_M" width="19.999994" height="20" x="196.00742" y="78" rx="5.0217347"></rect>
													<rect class="Figuroj_22" id="22_1_M" inkscape:label="22_1_M" width="19.999994" height="20" x="196.00742" y="58" rx="5.0217347"></rect>
												</g>
												<g class="simboloj_33" id="simboloj_33_M" inkscape:label="simboloj_33_M" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(256.49259,108)">
													<text class="skr-sign s33 gr" id="33_Gr_M_min" xml:space="preserve" inkscape:label="33_Gr_M_min" x="221.99603" y="80.364136" style="stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">μ</text>
													<text class="skr-sign s33 gr" id="33_Gr_M_may" xml:space="preserve" inkscape:label="33_Gr_M_may" x="215.78831" y="70.133438">Μ</text>
													<text class="skr-sign s33 sxa" id="33_Sxa_M" xml:space="preserve" inkscape:label="33_Sxa_M" x="209.57426" y="92.6633" transform="scale(0.97203684,1.0287676)">𐑫</text>
													<text class="skr-sign s33 lat" id="33_Lat_M_min" xml:space="preserve" inkscape:label="33_Lat_M_min" x="209.57426" y="80.354668" transform="scale(0.97203684,1.0287676)">m</text>
													<text class="skr-sign s33 lat_may" id="33_Lat_M_may" xml:space="preserve" inkscape:label="33_Lat_M_may" x="209.57426" y="68.307861" transform="scale(0.97203684,1.0287676)">M</text>
												</g>
												<g class="simboloj_22" id="g7498" inkscape:label="simboloj_22_M" style="display:none" inkscape:highlight-color="#8220a6" transform="translate(256.49259,108)">
													<text class="skr-sign s22 gr" id="22_Gr_M_min" xml:space="preserve" inkscape:label="22_Gr_M_min" x="232.50911" y="87.811966" style="font-size:16px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">μ</text>
													<text class="skr-sign s22 gr" id="22_Gr_M_may" xml:space="preserve" inkscape:label="22_Gr_M_may" x="226.00742" y="72.848473">Μ</text>
													<text class="skr-sign s22 lat" id="22_Lat_M_min" xml:space="preserve" inkscape:label="22_Lat_M_min" x="211.93375" y="89.222946" transform="scale(0.97203684,1.0287676)">m</text>
													<text class="skr-sign s22 lat_may" id="22_Lat_M_may" xml:space="preserve" inkscape:label="22_Lat_M_may" x="211.93375" y="70.946976" transform="scale(0.97203684,1.0287676)">M</text>
												</g>
												<g class="Figuroj_group_11" id="g13956" inkscape:label="11_Figuroj_E" style="display:none" inkscape:highlight-color="#58392b" transform="translate(256.99258,108)">
													<rect class="Figuroj_11" id="11_3_E" inkscape:label="11_3_E" width="40" height="40" x="195.50742" y="58" rx="5.0000038" style="display:inline;stroke-width:2"></rect>
													<rect class="Figuroj_11" id="11_2_E" inkscape:label="11_2_E" width="15.437867" height="15.437872" x="218.25081" y="81.562439" rx="3.8762448" style="stroke-width:0.771894"></rect>
													<rect class="Figuroj_11" id="11_1_E" inkscape:label="11_1_E" width="27.895975" height="27.895983" x="199.82841" y="64.800201" rx="7.0043111" style="stroke-width:1.3948"></rect>
												</g>
												<g class="simboloj_11" id="simboloj_11_E" inkscape:label="simboloj_11_E" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(256.99258,108)">
													<text class="skr-sign s11_sx sxa" id="11_Sxa_E" xml:space="preserve" inkscape:label="11_Sxa_E" x="219.92624" y="82.364326" transform="scale(0.97203684,1.0287676)">𐑫</text>
												</g>
											</g>
											<g class="Figuroj_group_12" id="g3203" inkscape:label="12_Figuroj_BKQuote" style="display:none" inkscape:highlight-color="#58392b" transform="translate(391.49259,54)">
												<rect class="Figuroj_12" id="rect3197" inkscape:label="12_3_BKQuote" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3199" inkscape:label="12_2_BKQuote" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3201" inkscape:label="12_1_BKQuote" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g3211" inkscape:label="simboloj_12_Colon_ES-LA" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(391.84158,54)">
												<text class="skr-sign altgr" id="text3205" xml:space="preserve" inkscape:label="12_Sim_Colon_AltGr_ES-LA" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">μ</text>
												<text class="skr-sign ES LA simb shift" id="text3207" xml:space="preserve" inkscape:label="12_Sim_Colon_Shift_ES-LA" x="226.00742" y="72.848473">Ñ</text>
												<text class="skr-sign ES LA simb" id="text3209" xml:space="preserve" inkscape:label="12_Sim_Colon_ES-LA" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">ñ</text>
											</g>
											<g class="simboloj_12" id="g1840" inkscape:label="simboloj_12_Colon_EN" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(391.84158,54)">
												<text class="skr-sign EN simb shift" id="text1836" xml:space="preserve" inkscape:label="12_Sim_Colon_Shift_EN" x="226.00742" y="72.848473">:</text>
												<text class="skr-sign EN simb" id="text1838" xml:space="preserve" inkscape:label="12_Sim_Colon_EN" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">;</text>
											</g>
											<g class="simboloj_12" id="g3827" inkscape:label="simboloj_12_Colon_DE" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(391.84158,54)">
												<text class="skr-sign DE simb shift" id="text3822" xml:space="preserve" inkscape:label="12_Sim_Colon_Shift_DE" x="226.00742" y="72.848473">Ö</text>
												<text class="skr-sign DE simb" id="text3824" xml:space="preserve" inkscape:label="12_Sim_Colon_DE" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">ö</text>
											</g>
										</g>
										<g class="keycap" id="g436" transform="translate(15,15)" inkscape:label="Key_Quote" style="display:inline">
											<rect class="outer border" id="OutB_Quote" x="635.5" y="109" width="52" height="52" rx="5" inkscape:label="OutB_Quote"></rect>
											<rect class="outer fill" id="OutF_Quote" x="635.5" y="109" width="52" height="52" rx="5" inkscape:label="OutF_Quote"></rect>
											<rect class="inner border" id="InB_Quote" x="641.5" y="112" width="40" height="40" rx="5" inkscape:label="InB_Quote"></rect>
											<rect class="inner fill" id="InF_Quote" x="641.5" y="112" width="40" height="40" rx="5" inkscape:label="InF_Quote"></rect>
											<g class="Figuroj_group_12" id="g3235" inkscape:label="12_Figuroj_BKQuote" style="display:none" inkscape:highlight-color="#58392b" transform="translate(445.49258,54)">
												<rect class="Figuroj_12" id="rect3229" inkscape:label="12_3_BKQuote" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3231" inkscape:label="12_2_BKQuote" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3233" inkscape:label="12_1_BKQuote" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g4911" inkscape:label="simboloj_12_Quote" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(445.84157,54)">
												<text class="skr-sign altgr DE" id="text3935" xml:space="preserve" inkscape:label="12_Sim_Quote_AltGr_DE" x="232.50911" y="87.811966" style="font-size:12px;display:inline;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">@</text>
												<text class="skr-sign altgr LA" id="text19599" xml:space="preserve" inkscape:label="12_Sim_Quote_AltGr_LA" x="232.50911" y="87.811966" style="font-size:12px;display:none;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">^</text>
												<text class="skr-sign altgr ES" id="text3237" xml:space="preserve" inkscape:label="12_Sim_Quote_AltGr_ES" x="232.50911" y="87.811966" style="font-size:12px;display:none;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">{</text>
												<text class="skr-sign DE simb shift" id="text3932" xml:space="preserve" inkscape:label="12_Sim_Quote_Shift_DE" x="226.00742" y="72.848473" style="display:inline">Ä</text>
												<text class="skr-sign LA simb shift" id="text19593" xml:space="preserve" inkscape:label="12_Sim_Quote_Shift_LA" x="226.00742" y="72.848473" style="display:none">[</text>
												<text class="skr-sign FR simb shift" id="text1822" xml:space="preserve" inkscape:label="12_Sim_Quote_Shift_FR" x="226.00742" y="72.848473" style="display:none">%</text>
												<text class="skr-sign ES simb shift" id="text3239" xml:space="preserve" inkscape:label="12_Sim_Quote_Shift_ES" x="226.00742" y="72.848473" style="display:none">̈̈</text>
												<text class="skr-sign EN simb shift" id="text4907" xml:space="preserve" inkscape:label="12_Sim_Quote_Shift_EN" x="226.00742" y="72.848473">&quot;</text>
												<text class="skr-sign DE simb" id="text3929" xml:space="preserve" inkscape:label="12_Sim_Quote_DE" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">ä</text>
												<text class="skr-sign LA simb" id="text19596" xml:space="preserve" inkscape:label="12_Sim_Quote_LA" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">{</text>
												<text class="skr-sign FR simb" id="text1819" xml:space="preserve" inkscape:label="12_Sim_Quote_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">ù</text>
												<text class="skr-sign ES simb" id="text3241" xml:space="preserve" inkscape:label="12_Sim_Quote_ES" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px;display:inline">´</text>
												<text class="skr-sign EN simb" id="text4909" xml:space="preserve" inkscape:label="12_Sim_Quote_EN" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">'</text>
											</g>
										</g>
										<g class="keycap ISO" id="g2590" transform="translate(-552,69)" inkscape:label="Key_Extra" style="display:inline">
											<rect class="outer border" id="rect2566" x="635.5" y="109" width="52" height="52" rx="5" inkscape:label="OutB_Quote"></rect>
											<rect class="outer fill" id="rect2568" x="635.5" y="109" width="52" height="52" rx="5" inkscape:label="OutF_Quote"></rect>
											<rect class="inner border" id="rect2570" x="641.5" y="112" width="40" height="40" rx="5" inkscape:label="InB_Quote"></rect>
											<rect class="inner fill" id="rect2572" x="641.5" y="112" width="40" height="40" rx="5" inkscape:label="InF_Quote"></rect>
											<g class="Figuroj_group_12" id="g2580" inkscape:label="12_Figuroj_BKQuote" style="display:none" inkscape:highlight-color="#58392b" transform="translate(445.49258,54)">
												<rect class="Figuroj_12" id="rect2574" inkscape:label="12_3_BKQuote" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect2576" inkscape:label="12_2_BKQuote" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect2578" inkscape:label="12_1_BKQuote" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g2588" inkscape:label="simboloj_12_Extra_ES" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(445.84157,54)">
												<text class="skr-sign altgr" id="text2582" xml:space="preserve" inkscape:label="12_Sim_Extra_AltGr_ES" x="232.50911" y="87.811966" style="font-size:16px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">μ</text>
												<text class="skr-sign  simb shift" id="text2584" xml:space="preserve" inkscape:label="12_Sim_Extra_Shift_ES" x="226.00742" y="72.848473">&gt;</text>
												<text class="skr-sign  simb" id="text2586" xml:space="preserve" inkscape:label="12_Sim_Extra_ES" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">&lt;</text>
											</g>
										</g>
										<g class="keycap" id="g536" transform="translate(15,15)" inkscape:label="Key_Comma" style="display:inline">
											<rect class="outer border" id="OutB_Comma" x="500.5" y="163" width="52" height="52" rx="5" inkscape:label="OutB_Comma"></rect>
											<rect class="outer fill" id="OutF_Comma" x="500.5" y="163" width="52" height="52" rx="5" inkscape:label="OutF_Comma"></rect>
											<rect class="inner border" id="InB_Comma" x="506.5" y="166" width="40" height="40" rx="5" inkscape:label="InB_Comma"></rect>
											<rect class="inner fill" id="InF_Comma" x="506.5" y="166" width="40" height="40" rx="5" inkscape:label="InF_Comma"></rect>
											<g class="Figuroj_group_12" id="g3259" inkscape:label="12_Figuroj_BKQuote" style="display:none" inkscape:highlight-color="#58392b" transform="translate(310.49259,108)">
												<rect class="Figuroj_12" id="rect3253" inkscape:label="12_3_BKQuote" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3255" inkscape:label="12_2_BKQuote" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3257" inkscape:label="12_1_BKQuote" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g3267" inkscape:label="simboloj_12_Comma_ES-LA-DE" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(310.84158,108)">
												<text class="skr-sign altgr" id="text3261" xml:space="preserve" inkscape:label="12_Sim_Comma_AltGr_ES-LA-DE" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">μ</text>
												<text class="skr-sign ES LA DE simb shift" id="text3263" xml:space="preserve" inkscape:label="12_Sim_Comma_Shift_ES-LA-DE" x="226.00742" y="72.848473">;</text>
												<text class="skr-sign ES LA DE simb" id="text3265" xml:space="preserve" inkscape:label="12_Sim_Comma_ES-LA-DE" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">,</text>
											</g>
											<g class="simboloj_12" id="g4903" inkscape:label="simboloj_12_Comma_EN" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(310.84158,108)">
												<text class="skr-sign EN simb shift" id="text4899" xml:space="preserve" inkscape:label="12_Sim_Comma_Shift_EN" x="226.00742" y="72.848473">&lt;</text>
												<text class="skr-sign EN simb" id="text4901" xml:space="preserve" inkscape:label="12_Sim_Comma_EN" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">,</text>
											</g>
											<g class="simboloj_12" id="g3392" inkscape:label="simboloj_12_Comma_FR" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(310.84158,108)">
												<text class="skr-sign FR simb shift" id="text3388" xml:space="preserve" inkscape:label="12_Sim_Comma_Shift_FR" x="226.00742" y="72.848473">.</text>
												<text class="skr-sign FR simb" id="text3390" xml:space="preserve" inkscape:label="12_Sim_Comma_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">;</text>
											</g>
										</g>
										<g class="keycap" id="g546" transform="translate(15,15)" inkscape:label="Key_Period" style="display:inline">
											<rect class="outer border" id="OutB_Period" x="554.5" y="163" width="52" height="52" rx="5" inkscape:label="OutB_Period"></rect>
											<rect class="outer fill" id="OutF_Period" x="554.5" y="163" width="52" height="52" rx="5" inkscape:label="OutF_Period"></rect>
											<rect class="inner border" id="InB_Period" x="560.5" y="166" width="40" height="40" rx="5" inkscape:label="InB_Period"></rect>
											<rect class="inner fill" id="InF_Period" x="560.5" y="166" width="40" height="40" rx="5" inkscape:label="InF_Period"></rect>
											<g class="Figuroj_group_12" id="g3283" inkscape:label="12_Figuroj_Period" style="display:none" inkscape:highlight-color="#58392b" transform="translate(364.49259,108)">
												<rect class="Figuroj_12" id="rect3277" inkscape:label="12_3_Period" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3279" inkscape:label="12_2_Period" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3281" inkscape:label="12_1_Period" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g3291" inkscape:label="simboloj_12_Period_ES-LA-DE" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(364.84158,108)">
												<text class="skr-sign altgr" id="text3285" xml:space="preserve" inkscape:label="12_Sim_Period_AltGr_ES-LA-DE" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">μ</text>
												<text class="skr-sign ES LA DE simb shift" id="text3287" xml:space="preserve" inkscape:label="12_Sim_Period_Shift_ES-LA-DE" x="226.00742" y="72.848473">:</text>
												<text class="skr-sign ES LA DE simb" id="text3289" xml:space="preserve" inkscape:label="12_Sim_Period_ES-LA-DE" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">.</text>
											</g>
											<g class="simboloj_12" id="g4895" inkscape:label="simboloj_12_Period_EN" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(364.84158,108)">
												<text class="skr-sign EN simb shift" id="text4891" xml:space="preserve" inkscape:label="12_Sim_Period_Shift_EN" x="226.00742" y="72.848473">&gt;</text>
												<text class="skr-sign EN simb" id="text4893" xml:space="preserve" inkscape:label="12_Sim_Period_EN" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">.</text>
											</g>
											<g class="simboloj_12" id="g1932" inkscape:label="simboloj_12_Period_FR" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(364.84158,108)">
												<text class="skr-sign FR simb shift" id="text1928" xml:space="preserve" inkscape:label="12_Sim_Period_Shift_FR" x="226.00742" y="72.848473">/</text>
												<text class="skr-sign FR simb" id="text1930" xml:space="preserve" inkscape:label="12_Sim_Period_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">:</text>
											</g>
										</g>
										<g class="keycap" id="g556" transform="translate(15,15)" inkscape:label="Key_Slash" style="display:inline">
											<rect class="outer border" id="OutB_Slash" x="608.5" y="163" width="52" height="52" rx="5" inkscape:label="OutB_Slash"></rect>
											<rect class="outer fill" id="OutF_Slash" x="608.5" y="163" width="52" height="52" rx="5" inkscape:label="OutF_Slash"></rect>
											<rect class="inner border" id="InB_Slash" x="614.5" y="166" width="40" height="40" rx="5" inkscape:label="InB_Slash"></rect>
											<rect class="inner fill" id="InF_Slash" x="614.5" y="166" width="40" height="40" rx="5" inkscape:label="InF_Slash"></rect>
											<g class="Figuroj_group_12" id="g3307" inkscape:label="12_Figuroj_Slash" style="display:none" inkscape:highlight-color="#58392b" transform="translate(418.49258,108)">
												<rect class="Figuroj_12" id="rect3301" inkscape:label="12_3_Slash" width="19.999994" height="20" x="216.00742" y="78" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3303" inkscape:label="12_2_Slash" width="19.999994" height="20" x="216.00742" y="58" rx="5.0217347"></rect>
												<rect class="Figuroj_12" id="rect3305" inkscape:label="12_1_Slash" width="19.999994" height="40" x="196.00742" y="58" rx="5.0217347"></rect>
											</g>
											<g class="simboloj_12" id="g3315" inkscape:label="simboloj_12_Slash_ES-LA-DE" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(418.84157,108)">
												<text class="skr-sign altgr" id="text3309" xml:space="preserve" inkscape:label="12_Sim_Slash_AltGr_ES-DE" x="232.50911" y="87.811966" style="font-size:12px;stroke-dasharray:none" transform="scale(0.97203684,1.0287676)">μ</text>
												<text class="skr-sign ES LA DE simb shift" id="text3311" xml:space="preserve" inkscape:label="12_Sim_Slash_Shift_ES-LA-DE" x="226.00742" y="72.848473">_</text>
												<text class="skr-sign ES LA DE simb" id="text3313" xml:space="preserve" inkscape:label="12_Sim_Slash_ES-LA-DE" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">-</text>
											</g>
											<g class="simboloj_12" id="g4885" inkscape:label="simboloj_12_Slash_EN" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(418.84157,108)">
												<text class="skr-sign EN simb shift" id="text4881" xml:space="preserve" inkscape:label="12_Sim_Slash_Shift_EN" x="226.00742" y="72.848473">?</text>
												<text class="skr-sign EN simb" id="text4883" xml:space="preserve" inkscape:label="12_Sim_Slash_EN" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">/</text>
											</g>
											<g class="simboloj_12" id="g3398" inkscape:label="simboloj_12_Slash_FR" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(418.84157,108)">
												<text class="skr-sign FR simb shift" id="text3394" xml:space="preserve" inkscape:label="12_Sim_Slash_Shift_FR" x="226.00742" y="72.848473">§</text>
												<text class="skr-sign FR simb" id="text3396" xml:space="preserve" inkscape:label="12_Sim_Slash_FR" x="211.32866" y="81.373672" transform="scale(0.97203684,1.0287676)" style="font-size:18.6667px">!</text>
											</g>
										</g>
									</g>
								</g>
								</svg>
								<!--<p class="text_min"><b>La skribsignoj, kiuj estas kunmetitaj de la simbolo "◌", estas senpaŝklavoj.</b></p>-->
								<div >
									<ul class="horizontala_depen" style="margin-top: 0.7em;">
										<div>
											<ul class="horizontala" style="justify-content: center" id="butono_grupo">
												<li><button class="butono_verda " id="butono_22" style="vertical-align:middle" onclick="montri_22();"><span>Montri simplan kradon <!--&#739;--></span></button></li>
												<li><button class="butono_verda butono_elektita" id="butono_33" style="vertical-align:middle" onclick="montri_33();"><span>Montri detalan kradon <!--&#739;--></span></button></li>
											</ul>
											<ul class="horizontala" style="justify-content: center">
												<li><button class="butono_verda butono_maleblita" id="butono_22_sxa" style="vertical-align:middle" onclick="montri_22_sxa()"><span class="ico11" id="span_ico11">Montri starlingŝavaĵojn </span></button></li>
												<li><button class="butono_verda butono_maleblita" id="butono_22_lat" style="vertical-align:middle" onclick="montri_22_lat()"><span class="ico22" id="span_ico22">Montri latinajn literojn </span></button></li>
											</ul>
										</div>
										<div>
											<form id="vidklavaro_form" name="vidklavaro_form">
												<p><i>Elektu la skribsignojn, kiujn vi volas vidi sur la supra ekzempla vidklavaro:</i></p><br>
												<p id="opcio_33" style="display:none">
													<input id="checkbox_montrigrek_33_aliaj" name="checkbox_montrigrek_33_aliaj" type="checkbox" checked disabled="disabled"><label for="checkbox_montrigrek_33_aliaj">Montri <span class="klav RALT">⇮ ALTGr</span> aliaĵojn</label><br>
													<input id="checkbox_montrigrek_33" name="checkbox_montrigrek_33" type="checkbox" checked onclick="montri_grek33()"><label for="checkbox_montrigrek_33">Montri grekajn literojn</label>
												</p>
												<p id="opcio_11_sxa" style="display:none">
													<input id="checkbox_montrigrek_22_lat_alia" name="checkbox_montrigrek_22_lat_alia" type="checkbox" checked disabled="disabled"><label for="checkbox_montrigrek_22_lat_alia">Montri <span class="klav RALT">⇮ ALTGr</span> aliaĵojn</label><br>
												</p>
												<p id="opcio_22_lat" style="display:none">
													<input id="radio_montrigrek_22_lat_alia" name="radio_montrigrek_22_lat" type="radio" value="alia" checked onclick="montri_grek22()"><label for="radio_montrigrek_22_lat_alia">Montri <span class="klav RALT">⇮ ALTGr</span> aliaĵojn</label><br>
													<input id="radio_montrigrek_22_lat_gr" name="radio_montrigrek_22_lat" type="radio" value="greka" onclick="montri_grek22()"><label for="radio_montrigrek_22_lat_gr">Montri grekajn literojn</label>
												</p>
											</form>
										</div>
									</ul>
								</div>
							</div>
							<br><br class="brcomplete">
							<div class="noto flava">
								<ul class="horizontala">
									<li><img class="info_png" src="alert.png" alt="info_logo"></li>
									<li>
										<p><i>Keyman kapablas montri interagajn vidklavarojn komputile, tamen aktuale dum la kreado de tiu ĉi klavarfasono, tio nur funckias por klavarfasonoj neadapteblaj (funkcias por <i>"positional layouts"</i>, ne <i>"mnemonic layouts"</i>, laŭ Keyman) Vindoze. Eble estontece, tio ĉi funkcios por ĉi tiaj klavarfasonoj. Uzu tiun ĉi vidklavaron kiel referencon se vi forgesas la virtualan posicion de iu ajn skribsignon.
											<br/>
										</i></p>
									</li>
								</ul>
							</div>
						</section>
						<section>
							<h3 id="tavoloj">★ a. Klavartavoloj</h3>
							<div class="div_interaga" style="padding: 10px; justify-content: center; align-items: center; text-align: center; max-width: 600px; margin:auto;">
								<svg id="svg2113" viewBox="0 0 85 55" style="display: block; margin: auto; min-width: 300px; max-width: 500px;" version="1.1" sodipodi:docname="Resumo2.svg" inkscape:version="1.2.2 (732a01da63, 2022-12-09)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
									<style type="text/css">
									.skr-sign {
										font-family: 'Inter Alia';
										text-align: center;
										text-anchor: middle;
										display: inline;
										opacity: 1;
										fill-opacity: 1;
										-inkscape-font-specification: 'Inter Alia';
										font-style: normal;
										font-variant: normal;
										font-weight: normal;
										font-stretch: normal;
										stroke-width: 1.029;
									}
								
									.RE_Figuroj_33 {
										display:inline;fill:#959583;fill-opacity:1;stroke-width:0.921493;
									}
								
									.RE_33_Figuroj_Gr {
										stroke-width:1.26935;
									}
									</style>
									<defs id="defs2110">
										<linearGradient id="linearGradient4260" inkscape:collect="always">
											<stop id="stop4256" style="stop-color:#478e50;stop-opacity:1;" offset="0" />
											<stop id="stop4258" style="stop-color:#5ecddf;stop-opacity:1;" offset="0.65188468" />
										</linearGradient>
										<linearGradient id="linearGradient4229" inkscape:collect="always">
											<stop id="stop4225" style="stop-color:#478e50;stop-opacity:1;" offset="0" />
											<stop id="stop4227" style="stop-color:#5ecddf;stop-opacity:1;" offset="0.67184037" />
										</linearGradient>
										<linearGradient id="linearGradient4221" inkscape:collect="always">
											<stop id="stop4217" style="stop-color:#933b00;stop-opacity:1;" offset="0" />
											<stop id="stop4219" style="stop-color:#933b00;stop-opacity:0;" offset="1" />
										</linearGradient>
										<linearGradient id="linearGradient4223" inkscape:collect="always" xlink:href="#linearGradient4221" x1="-11.409637" y1="32.534801" x2="-1.5382529" y2="32.534801" gradientUnits="userSpaceOnUse" />
										<linearGradient id="linearGradient4231" inkscape:collect="always" xlink:href="#linearGradient4229" x1="-10.77574" y1="25.309559" x2="-2.1420891" y2="25.309559" gradientUnits="userSpaceOnUse" gradientTransform="translate(-1.9520223,11.158326)" />
										<linearGradient id="linearGradient4262" inkscape:collect="always" xlink:href="#linearGradient4260" x1="-10.77574" y1="25.309559" x2="-2.1420891" y2="25.309559" gradientUnits="userSpaceOnUse" gradientTransform="translate(-1.9520223,11.158326)" />
									</defs>
									<g id="layer1" inkscape:label="Capa 1" inkscape:groupmode="layer">
										<g class="keycap" id="RE_Key_A" transform="matrix(0.52916666,0,0,0.52916666,-42.061699,-12.127656)" inkscape:label="Key_A" style="display:inline">
											<rect class="outer border" id="RE_OutB_A" x="136" y="55" width="52" height="52" rx="5" inkscape:label="OutB_A" style="fill:#cccccc;stroke:#000000;stroke-width:2"  />
											<rect class="outer fill" id="RE_OutF_A" x="136" y="55" width="52" height="52" rx="5" style="display:inline;fill:#cccccc" inkscape:label="OutF_A"  />
											<rect class="inner border" id="RE_InB_A" x="140.11862" y="58" width="43.762749" height="40" rx="5.4703436" inkscape:label="InB_A" style="fill:#fcfcfc;stroke-width:2.09195"  />
											<rect class="inner fill" id="RE_InF_A" x="140.11862" y="58" width="43.762749" height="40" rx="5.4703436" inkscape:label="InF_A" style="fill:#fcfcfc;stroke-width:1.04598"  />
											<g class="RE_Figuroj_group_33" id="RE_33_Figuroj_A" inkscape:label="33_Figuroj_A" style="display:none" inkscape:highlight-color="#58392b" transform="translate(-53.959003,0.049585)">
												<rect class="RE_Figuroj_33" id="RE_33_9_A" width="13.586378" height="13.15" x="222.41362" y="84.849998" rx="4.2457433" inkscape:label="33_9_A"    />
												<rect class="RE_Figuroj_33" id="RE_33_8_A" width="13.586378" height="13.425" x="222.41362" y="71.425003" rx="4.2457433" inkscape:label="33_8_A"    />
												<rect class="RE_Figuroj_33" id="RE_33_7_A" width="13.586378" height="13.425" x="222.41362" y="58" rx="4.2457433" inkscape:label="33_7_A"    />
												<rect class="RE_33_Figuroj_Gr" id="RE_33_6_A" width="12.890254" height="13.15" x="208.4328" y="84.849998" rx="6.445127" inkscape:label="33_6_A"    />
												<rect class="RE_33_Figuroj_Gr" id="RE_33_5_A" width="12.890254" height="13.424991" x="208.4328" y="71.425003" rx="6.3872228" inkscape:label="33_5_A"    />
												<rect class="RE_33_Figuroj_Gr" id="RE_33_4_A" width="12.890254" height="13.425003" x="208.4328" y="58.000004" rx="6.445127" inkscape:label="33_4_A"    />
												<rect class="RE_Figuroj_33" id="RE_33_3_A" width="13.229343" height="13.15" x="195.20346" y="84.514069" rx="4.1341696" inkscape:label="33_3_A"    />
												<rect class="RE_Figuroj_33" id="RE_33_2_A" width="13.229343" height="13.424997" x="195.20346" y="71.089073" rx="4.1341696" inkscape:label="33_2_A"    />
												<rect class="RE_Figuroj_33" id="RE_33_1_A" width="13.229343" height="13.425" x="195.20346" y="57.66407" rx="4.1341696" inkscape:label="33_1_A"    />
											</g>
											<g class="RE_simboloj_33" id="RE_simboloj_33_A" inkscape:label="RE_simboloj_33_A" style="display:inline" inkscape:highlight-color="#8220a6" transform="translate(-53.959003,0.049585)">
												<text class="skr-sign RE_aliaj RE_sxa" id="RE_33_Sxa_Au" xml:space="preserve" x="235.53775" y="92.412521" transform="scale(0.97203684,1.0287676)" inkscape:label="RE_33_Sxa_Au" style="font-size:13.3333px;font-family:'Inter Alia';text-align:center;text-anchor:middle;display:inline;opacity:1;fill:#da5d87;fill-opacity:1;stroke-width:1.029">𐑲</text>
												<text class="skr-sign RE_aliaj" id="RE_Alia_A_min" xml:space="preserve" x="235.36729" y="79.090469" transform="scale(0.97203684,1.0287676)" inkscape:label="RE_Alia_A_min" style="font-size:13.3333px;font-family:'Inter Alia';text-align:center;text-anchor:middle;display:inline;opacity:1;fill:#da5d87;fill-opacity:1;stroke-width:1.029">æ</text>
												<text class="skr-sign RE_aliaj" id="RE_Alia_A_may" xml:space="preserve" x="235.63245" y="67.746361" transform="scale(0.97203684,1.0287676)" inkscape:label="RE_Alia_A_may" style="font-size:13.3333px;font-family:'Inter Alia';text-align:center;text-anchor:middle;display:inline;opacity:1;fill:#da5d87;fill-opacity:1;stroke-width:1.029">Æ</text>
												<text class="skr-sign RE_gr" id="RE_33_Gr_A_min" xml:space="preserve" style="font-size:13.3333px;font-family:'Inter Alia';text-align:center;text-anchor:middle;display:inline;opacity:1;fill:#ff7f2a;fill-opacity:1;stroke-width:1.029;stroke-dasharray:none" x="221.05945" y="79.099846" transform="scale(0.97203684,1.0287676)" inkscape:label="RE_Gr_A_min">α</text>
												<text class="skr-sign RE_gr" id="RE_33_Gr_A_may" xml:space="preserve" x="214.87791" y="69.565521" inkscape:label="RE_Gr_A_may" style="font-size:13.3333px;font-family:'Inter Alia';text-align:center;text-anchor:middle;display:inline;opacity:1;fill:#ff7f2a;fill-opacity:1;stroke-width:1.029">Α</text>
												<text class="skr-sign RE_sxa" id="RE_33_Sxa_A" xml:space="preserve" x="207.79442" y="92.412521" transform="scale(0.97203684,1.0287676)" inkscape:label="RE_Sxa_A" style="font-size:13.3333px;font-family:'Inter Alia';text-align:center;text-anchor:middle;display:inline;opacity:1;fill:#000000;fill-opacity:1;stroke-width:1.029">𐑨</text>
												<text class="skr-sign RE_lat" id="RE_33_Lat_A_min" xml:space="preserve" x="207.79442" y="79.090553" transform="scale(0.97203684,1.0287676)" inkscape:label="RE_33_Lat_A_min" style="font-size:13.3333px;font-family:'Inter Alia';text-align:center;text-anchor:middle;display:inline;opacity:1;fill:#478e50;fill-opacity:1;stroke-width:1.029">a</text>
												<text class="skr-sign RE_lat_may" id="RE_33_Lat_A_may" xml:space="preserve" x="207.62396" y="67.751183" transform="scale(0.97203684,1.0287676)" inkscape:label="RE_Lat_A_may" style="font-size:13.3333px;font-family:'Inter Alia';text-align:center;text-anchor:middle;display:inline;opacity:1;fill:#6cd1e2;fill-opacity:1;stroke-width:1.029">A</text>
											</g>
										</g>
										<rect id="RE_literlat" style="display:inline;opacity:0.5;fill:none;fill-opacity:1;stroke:#29b9d1;stroke-width:0.277095;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:1.10838, 0.554189;stroke-dashoffset:0.387932;stroke-opacity:1;paint-order:normal" width="6.3766627" height="13.323552" x="32.992619" y="19.148193" rx="1.3094174" inkscape:label="literlat"  />
										<rect id="RE_litergre" style="opacity:0.5;fill:none;fill-opacity:1;stroke:#933b00;stroke-width:0.275;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:1.1, 0.55;stroke-dashoffset:1.265;stroke-opacity:1;paint-order:normal" width="6.3065014" height="13.32521" x="40.000408" y="19.149893" rx="1.2950103" inkscape:label="litergre"  />
										<rect id="RE_literali" style="opacity:0.5;fill:none;fill-opacity:1;stroke:#6c1935;stroke-width:0.275;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:0;stroke-dasharray:1.1, 0.55;stroke-dashoffset:0.495;stroke-opacity:1;paint-order:normal" width="7.3888345" height="19.830963" x="46.979748" y="19.175678" rx="1.5172622" inkscape:label="literali"  />
										<rect id="RE_rect253" style="opacity:0.5;fill:none;stroke:#000000;stroke-width:0.277011;stroke-dasharray:1.10804, 0.554022;stroke-dashoffset:0.360114;stroke-opacity:1" width="21.375002" height="5.9119115" x="32.992577" y="33.092125" rx="1.3427893" inkscape:label="litersxa"  />
										<text id="RE_text6170" xml:space="preserve" style="font-size:3.52778px;font-family:'Times New Roman';-inkscape-font-specification:'Times New Roman, ';text-align:center;text-anchor:middle;opacity:0.5;fill:none;stroke:#000000;stroke-width:0.175;stroke-dasharray:none;stroke-dashoffset:0.360114;stroke-opacity:1" x="43.725174" y="53.561001" inkscape:label="sxava"><tspan id="tspan6168" sodipodi:role="line" style="font-size:3.52778px;font-family:'Inter Alia';fill:#000000;fill-opacity:1;stroke-width:0.175;stroke-dasharray:none" x="43.725174" y="53.561001">𐑖𐑨𐑝𐑨</tspan></text>
										<text id="RE_text6170-7" xml:space="preserve" style="font-size:3.52778px;font-family:'Times New Roman';-inkscape-font-specification:'Times New Roman, ';text-align:center;text-anchor:middle;opacity:0.637255;fill:#933b00;fill-opacity:0.997333;stroke:#933b00;stroke-width:0.175;stroke-dasharray:none;stroke-dashoffset:0.360114;stroke-opacity:0.780392" x="-8.6439457" y="44.491997" transform="rotate(-90)" inkscape:label="Γρεκα"><tspan id="tspan6168-2" sodipodi:role="line" style="font-size:3.52778px;font-family:'Inter Alia';fill:#933b00;fill-opacity:0.997333;stroke:#933b00;stroke-width:0.175;stroke-dasharray:none;stroke-opacity:0.780392" x="-8.6439457" y="44.491997">← Γρεκα</tspan></text>
										<text id="RE_text6170-7-5" xml:space="preserve" style="font-size:3.52778px;font-family:'Inter Alia';text-align:center;text-anchor:middle;opacity:0.5;fill:#6c1935;fill-opacity:1;stroke:#6c1935;stroke-width:0.175;stroke-dasharray:none;stroke-dashoffset:0.360114;stroke-opacity:1" x="74.059395" y="30.403435" inkscape:label="altgr"><tspan id="tspan6168-2-7" sodipodi:role="line" style="font-size:3.52778px;font-family:'Inter Alia';fill:#6c1935;fill-opacity:1;stroke:#6c1935;stroke-width:0.175;stroke-dasharray:none;stroke-opacity:1" x="74.059395" y="30.403435">← ⇮ ALTGr</tspan></text>
										<text id="RE_text6170-7-5-1" xml:space="preserve" style="font-size:3.52778px;font-family:'Times New Roman';-inkscape-font-specification:'Times New Roman, ';text-align:center;text-anchor:middle;opacity:0.821078;fill:url(#linearGradient4262);fill-opacity:1;stroke:url(#linearGradient4231);stroke-width:0.175;stroke-dasharray:none;stroke-dashoffset:0.360114;stroke-opacity:0.765333" x="-8.4109335" y="37.769497" transform="rotate(-90)" inkscape:label="latina"><tspan id="tspan6168-2-7-3" sodipodi:role="line" style="font-size:3.52778px;font-family:'Inter Alia';fill:url(#linearGradient4262);fill-opacity:1;stroke:url(#linearGradient4231);stroke-width:0.175;stroke-dasharray:none;stroke-opacity:0.765333" x="-8.4109335" y="37.769497">← Latina</tspan></text>
										<text id="RE_text1057" xml:space="preserve" style="font-size:18.1654px;font-family:'ESL Gothic Unicode';-inkscape-font-specification:'ESL Gothic Unicode';text-align:center;text-anchor:middle;fill:#6c1935;fill-opacity:0.5;stroke:none;stroke-width:1.40207;stroke-dasharray:none;stroke-opacity:1" x="71.086403" y="30.24765" transform="scale(0.86553784,1.155351)" inkscape:label="corchete1"><tspan id="tspan1055" sodipodi:role="line" style="fill:#6c1935;fill-opacity:0.5;stroke:none;stroke-width:1.40207;stroke-dasharray:none;stroke-opacity:1" x="71.086403" y="30.24765">}</tspan></text>
										<text id="RE_text1057-4" xml:space="preserve" style="font-size:18.8509px;line-height:0;font-family:'ESL Gothic Unicode';-inkscape-font-specification:'ESL Gothic Unicode';text-align:center;text-anchor:middle;fill:#000000;fill-opacity:0.5;stroke:none;stroke-width:1.45498;stroke-dasharray:none;stroke-opacity:1" x="57.486679" y="-31.172579" transform="matrix(0,0.83406369,-1.1989492,0,0,0)" inkscape:label="corchete2"><tspan id="tspan1055-7" sodipodi:role="line" style="fill:#000000;fill-opacity:0.5;stroke:none;stroke-width:1.45498;stroke-dasharray:none;stroke-opacity:1" x="57.486679" y="-31.172579">}</tspan></text>
										<text id="RE_text6170-7-7" xml:space="preserve" style="font-size:3.52778px;font-family:'Times New Roman';-inkscape-font-specification:'Times New Roman, ';text-align:center;text-anchor:middle;opacity:0.637255;fill:#000000;fill-opacity:1;stroke:#000000;stroke-width:0.175;stroke-dasharray:none;stroke-dashoffset:0.360114;stroke-opacity:1" x="18.874275" y="30.3536" inkscape:label="shift"><tspan id="tspan6168-2-1" sodipodi:role="line" style="font-size:3.52778px;font-family:'Inter Alia';fill:#000000;fill-opacity:1;stroke:#000000;stroke-width:0.175;stroke-dasharray:none;stroke-opacity:1" x="14.3" y="30.3536">⇪ CAPS-Lock →</tspan></text>
										<text id="RE_text6170-7-7-4" xml:space="preserve" style="font-size:3.52778px;font-family:'Times New Roman';-inkscape-font-specification:'Times New Roman, ';text-align:center;text-anchor:middle;opacity:0.637255;fill:#000000;fill-opacity:1;stroke:#000000;stroke-width:0.175;stroke-dasharray:none;stroke-dashoffset:0.360114;stroke-opacity:1" x="14.416943" y="23.257116" inkscape:label="capslock"><tspan id="tspan6168-2-1-8" sodipodi:role="line" style="font-size:3.52778px;font-family:'Inter Alia';fill:#000000;fill-opacity:1;stroke:#000000;stroke-width:0.175;stroke-dasharray:none;stroke-opacity:1" x="18.916943" y="23.257116">⇧ SHIFT →</tspan></text>
										<text id="RE_text6170-7-5-9" xml:space="preserve" style="font-size:3.52778px;font-family:'Inter Alia';text-align:center;text-anchor:middle;opacity:0.5;fill:#6c1935;fill-opacity:1;stroke:#6c1935;stroke-width:0.175;stroke-dasharray:none;stroke-dashoffset:0.360114;stroke-opacity:1" x="-8.5712967" y="52.34449" transform="rotate(-90)" inkscape:label="alia"><tspan id="tspan6168-2-7-32" sodipodi:role="line" style="font-size:3.52778px;font-family:'Inter Alia';fill:#6c1935;fill-opacity:1;stroke:#6c1935;stroke-width:0.175;stroke-dasharray:none;stroke-opacity:1" x="-8.5712967" y="52.34449">← Aliaĵoj</tspan></text>
										<text id="RE_text6170-7-7-7" xml:space="preserve" style="font-size:3.52778px;font-family:'Times New Roman';-inkscape-font-specification:'Times New Roman, ';text-align:center;text-anchor:middle;opacity:0.637255;fill:#000000;fill-opacity:1;stroke:#000000;stroke-width:0.175;stroke-dasharray:none;stroke-dashoffset:0.360114;stroke-opacity:1" x="24.474127" y="37.170555" inkscape:label="nenio"><tspan id="tspan6168-2-1-6" sodipodi:role="line" style="font-size:3.52778px;font-family:'Inter Alia';fill:#000000;fill-opacity:1;stroke:#000000;stroke-width:0.175;stroke-dasharray:none;stroke-opacity:1" x="24.474127" y="37.170555">— →</tspan></text>
									</g>
								</svg>
								<p style="font-size: 0.8em; text-align: center;"><b>Jen la logiko, kiun sekvas la klavartavoloj de tiu ĉi klavarfasono</b></p>
							</div>
							<p>La komputila versio de tiu ĉi klavarfasono havas plurajn klavartavolojn. Ekzistas tri grupoj de litertavoloj; jen la ŝava (<span class="klav">⇪ CAPS-Lock</span> malŝaltita), la latina (<span class="klav">⇪ CAPS-Lock</span> ŝaltita) kaj la greka alfabeto (<span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="shift">⇧ SHIFT</span><span class="plus"> + </span>G</span>). Resume, la baza klavartavolo de ĉiu grupo faras minusklojn, <span class="klav shift">⇧ SHIFT</span> faras majusklojn kaj <span class="klav RALT">⇮ ALTGr</span> faras aliajn rilatajn skribsignojn (aliaĵoj).</p>
							<p>
								<ul style="line-height: 1.5">
									<li>
										<p style="margin-left: auto; margin-right: auto;">Estas 2 ŝavaj tavoloj (la simpla kaj la alterna); ambaŭ funkcias kiam <span class="klav">⇪ CAPS-Lock</span> estas malŝaltita sed la alterna funkcias per la premo de <span class=" klav RALT">⇮ ALTGr</span>. Uzante la alterna ŝava tavolo, vi povos skribi la ŝavajn versiojn de Ĥ (<span class="klav simbolo ŝava">𐑙</span>) kaj Ĵ (<span class="klav simbolo ŝava">𐑠</span>), krom la grafemojn proponitajn de Pokrovskij (<span class="klav simbolo ŝava">𐑲</span>, <span class="klav simbolo ŝava">𐑱</span>, <span class="klav simbolo ŝava">𐑰</span>kaj <span class="klav simbolo ŝava">𐑞</span>) kaj la ligaĵon <span class="klav simbolo ŝava">𐑳</span>-n.</p>
									</li>
									<li>
										<p style="margin-left: auto; margin-right: auto;">Estas 4 latinaj tavoloj (la minuskla, majuskla, kaj la alternaj majuskla kaj minuskla). Ili ĉiuj funkcias kiam <span class="klav">⇪ CAPS-Lock</span> estas ŝaltita. Se vi volas tajpi majusklon, uzu na <span class="klav shift">⇧ SHIFT</span>. Ambaŭ alternaj latinaj tavoloj funkcias per la klavo <span class="klav RALT">⇮ ALTGr</span>.</p>
									</li>
									<li>
										<p style="margin-left: auto; margin-right: auto;">Ekzistas 2 grekalfabetaj tavoloj; la minuskla kaj la majuskla, kaj ambaŭ funkcias per la <abbr title="Senpaŝklavoj estas klavoj, kies premo ne montras specifan skribsignon. Post ilia premo, oni devas tajpi alian klavon por montri certan modifitan skribsignon.">senpaŝklavo<span class="info_icon">i</span></abbr> <span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="shift">⇧ SHIFT</span><span class="plus"> + </span>G</span>. Ĉi tiuj tavoloj estos utilaj kiam vi volos skribi memstarajn grekliterojn por, ekzemple, skribi matematikajn ekvaciojn.</p>
									</li>
									<li>
										<p style="margin-left: auto; margin-right: auto;">La simboltavoloj kaj ilia konduto dependas ekskluzive de via fizika klavaranĝo (aŭ virtuala, se vi ŝanĝas ĝin en la Keymana agordo).</p>
										<p style="margin-left: auto; margin-right: auto;">Je kelkaj klavaroj (kiel la hispana klavarfasono), la simboltavoloj estas nedenpedaj de la litertavolo kiu estas aktiva nune, do ili nur dependas de la modifklavo kiu estas premata. Tamen, je aliaj klavaroj (kiel la franca klavaranĝo) la simboltavoloj ja dependas ĉu <span class="klav">⇪ CAPS-Lock</span> estas ŝaltita.</p>
										<p style="margin-left: auto; margin-right: auto;">Kelkaj signoj sur viaj klavoj povas esti anstataŭigitaj je <abbr title="Senpaŝklavoj estas klavoj, kies premo ne montras specifan skribsignon. Post ilia premo, oni devas tajpi alian klavon por montri certan modifitan skribsignon.">senpaŝklavo<span class="info_icon">i</span></abbr> por fari novajn diakritaĵojn; pluraj el ili povas esti agorditaj per la agordo de tiu ĉi klavarfasono (ĉe la Keymanaj agordoj).</p>
									</li>
								</ul>
							</p>
													
							<p>Jen resumo de la klavartavoloj en la sekva tabelo:</p>
							<div class="tg-wrap">
								<table class="tg">
									<thead>
										<tr>
											<th rowspan="2">Modifklavo</th>
											<th colspan="3">Literaj tavoloj</th>
											<th rowspan="2" style="border-style: solid solid solid none;">Simbolaj tavoloj</th>
										</tr>
										<tr>
											<th class="tabelo_ŝav" style="line-height: 1.4;">Ŝava alfabeto:<br><span class="klav">⇪ CAPS-Lock</span> malŝaltita</th>
											<th class="tabelo_lat" style="line-height: 1.4;">Latina alfabeto:<br><span class="klav">⇪ CAPS-Lock</span> ŝaltita</th>
											<th class="tabelo_gre" style="line-height: 1.4;">Greka alfabeto:<br><span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="shift">⇧ SHIFT</span><span class="plus"> + </span>G</span></th>
									  	</tr>
									</thead>
									<tbody>
									  	<tr>
											<td class="tabelo_ŝav">—</td>
											<td>Ŝavaj literoj</td>
											<td style="font-size: 1.2em;">←</td>
											<td style="font-size: 1.2em;">←</td>
											<td rowspan="2">Baza simbola tavolo</td>
										</tr>
										<tr>
											<td>Nur <span class="klav">⇪ CAPS-Lock</span> ŝaltita</td>
											<td style="font-size: 1.2em;">→</td>
											<td>Latinaj minuskloj</td>
											<td>Grekaj minuskloj</td>
										</tr>
										<tr>
											<td class="tg-shift"><span class="klav shift">⇧ SHIFT</span></td>
											<td style="font-size: 1.2em;">→</td>
											<td>Latinaj majuskloj</td>
											<td>Grekaj majuskloj</td>
											<td>Shiftita simbola tavolo</td>
										</tr>
										<tr>
											<td class="tg-altgr"><span class="klav RALT">⇮ ALTGr</span></td>
											<td>Proponaĵoj de Pokrovskij kaj literoj Ĵ kaj Ĥ</td>
											<td>Aliaj minusklaj latinaj literoj</td>
											<td>—</td>
											<td rowspan="2" style="border-bottom-right-radius: 6px;">AltGr-a simbola tavolo</td>
										</tr>
										<tr>
											<td class="tg-altgr"><span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> &gt; </span><span class="shift">⇧ SHIFT</span></span></td>
											<td>—</td>
											<td>Aliaj majusklaj literoj</td>
											<td style="border-bottom-right-radius:0px">—</td>
										</tr>
									</tbody>
								</table>
							</div>
							<p>Estas 4 latinaj literoj kiuj ne ekzistas Esperante, do ili estis anstataŭigitaj je la esperantaj ĉapelitaj literoj (aŭ lunetita, kaze de Ŭ) por sekvi la klavarfasonon SĜERTŬ-n en QWERTY-aj klavaroj:</p>
							<div class="tg-wrap">
								<table class="tg" id="tg-MtM91">
									<thead>
										<tr>
											<th class="tg-wgqg" rowspan="2" style="border-style: solid solid solid solid;">N°</th>
											<th class="tg-wgqg" rowspan="2" style="border-style: solid solid solid none;">Klavo</th>
											<th class="tg-wgqg" rowspan="2" style="border-style: solid solid solid none;">Ŝava</th>
											<th class="tg-wgqg" colspan="2">Esperantlatina</th>
										</tr>
										<tr>
											<th class="tg-wgqg" style="border-style: solid solid solid none;">Minuskla</th>
											<th class="tg-ru17">Majuskla</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="tg-u5bg">1</td>
											<td class="tg-5ioy"><span class="klav">Q</span></td>
											<td class="tg-5ioy"><span class="ŝava">𐑖</span></td>
											<td class="tg-5ioy">ŝ</td>
											<td class="tg-0lax">Ŝ</td>
										</tr>
										<tr>
											<td class="tg-u5bg">2</td>
											<td class="tg-5ioy"><span class="klav">W</span></td>
											<td class="tg-5ioy"><span class="ŝava">𐑡</span></td>
											<td class="tg-5ioy">ĝ</td>
											<td class="tg-0lax">Ĝ</td>
										</tr>
										<tr>
											<td class="tg-u5bg">3</td>
											<td class="tg-5ioy"><span class="klav">Y</span></td>
											<td class="tg-5ioy"><span class="ŝava">𐑘</span></td>
											<td class="tg-5ioy">ŭ</td>
											<td class="tg-0lax">Ŭ</td>
										</tr>
										<tr>
											<td class="tg-u5bg">4</td>
											<td class="tg-5ioy"><span class="klav">X</span></td>
											<td class="tg-5ioy"><span class="ŝava">𐑗</span></td>
											<td class="tg-5ioy">ĉ</td>
											<td class="tg-0lax">Ĉ</td>
										</tr>
									</tbody>
								</table>
							</div>
							<p>Estas <span style="color: #7a1fc5; font-weight: bold;">7 ŝavaj literoj</span>, kiujn oni tajpas per daŭra premo de <span class="klav RALT">⇮ AltGr</span> (kun <span class="klav">⇪ CAPS-Lock</span> malŝaltita):</p>
							<div class="tg-wrap">
								<table class="tg">
									<thead>
										<tr>
											<th class="tg-wgqg" rowspan="2" style="border-style: solid solid solid solid;">N°</th>
											<th class="tg-wgqg" rowspan="2" style="border-style: solid solid solid none;">Klavo</th>
											<th class="tg-wgqg" rowspan="2" style="border-style: solid solid solid none;">Ŝava</th>
											<th class="tg-wgqg" colspan="2">Esperantlatina ekvivalento</th>
										</tr>
										<tr>
											<th class="tg-wgqg" style="border-style: solid solid solid none;">Minuskla</th>
											<th class="tg-ru17">Majuskla</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td >1</td>
											<td><span class="klav">E</span></td>
											<td class="ŝava">𐑱</td>
											<td>eŭ</td>
											<td>EŬ</td>
										</tr>
										<tr>
											<td>2</td>
											<td><span class="klav">I</span></td>
											<td class="ŝava">𐑰</td>
											<td>i</td>
											<td>I</td>
										</tr>
										<tr>
											<td>3</td>
											<td><span class="klav">O</span></td>
											<td class="ŝava">𐑳<br></td>
											<td>on</td>
											<td>ON</td>
										</tr>
										<tr>
											<td>4</td>
											<td><span class="klav">A</span></td>
											<td class="ŝava">𐑲</td>
											<td>aŭ</td>
											<td>AŬ</td>
										</tr>
										<tr>
											<td>5</td>
											<td><span class="klav">H</span></td>
											<td class="ŝava">𐑙</td>
											<td>ĥ</td>
											<td>Ĥ</td>
										</tr>
										<tr>
											<td>6</td>
											<td><span class="klav">J</span></td>
											<td class="ŝava">𐑠</td>
											<td>ĵ</td>
											<td>Ĵ</td>
										</tr>
										<tr>
											<td>7</td>
											<td><span class="klav">Z</span></td>
											<td class="ŝava">𐑞</td>
											<td>dz</td>
											<td>DZ</td>
										</tr>
									</tbody>
								</table>
							</div>
							<p>Jen la 31 <span style="color: #7a1fc5; font-weight: bold;">alternaj latinaj skribsignoj</span> (minuskle kaj majuskle) de ĉi tiu klavarfasono, kune kun la klavo kiu faras ilin. Memoru, ke vi devas daŭre premi la klavon <span class="klav RALT">⇮ ALTGr</span>-n dum la premo de la alia klavo, kaj la latina litertavolo devas esti aktivita per <span class="klav">⇪ CAPS-Lock</span> ŝaltita.</p>
							<div class="tg-wrap">
								<table class="tg">
									<thead>
										<tr>
											<th class="tg-wgqg" rowspan="2" style="border-style: solid solid solid solid;">N°</th>
											<th class="tg-wgqg" rowspan="2" style="border-style: solid solid solid none;">Klavo</th>
											<th class="tg-wgqg" colspan="2">Latina</th>
										</tr>
										<tr>
											<th class="tg-wgqg" style="border-style: solid solid solid none;">Minuskla</th>
											<th class="tg-ru17">Majuskla</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td >1</td>
											<td><span class="klav">Q</span></td>
											<td>q</td>
											<td>Q</td>
										</tr>
										<tr>
											<td>2</td>
											<td><span class="klav">W</span></td>
											<td>w</td>
											<td>W</td>
										</tr>
										<tr>
											<td>3</td>
											<td><span class="klav">E</span></td>
											<td>ɛ<br></td>
											<td>Ɛ</td>
										</tr>
										<tr>
											<td>4</td>
											<td><span class="klav">T</span></td>
											<td>Þ</td>
											<td>Þ</td>
										</tr>
										<tr>
											<td>5</td>
											<td><span class="klav">Y</span></td>
											<td>y</td>
											<td>Y</td>
										</tr>
										<tr>
											<td>6</td>
											<td><span class="klav">U</span></td>
											<td>ə</td>
											<td>—</td>
										</tr>
										<tr>
											<td>7</td>
											<td><span class="klav">I</span></td>
											<td>ı</td>
											<td>İ</td>
										</tr>
										<tr>
											<td>8</td>
											<td><span class="klav">O</span></td>
											<td>œ</td>
											<td>Œ</td>
										</tr>
										<tr>
											<td>9</td>
											<td><span class="klav">A</span></td>
											<td>æ</td>
											<td>Æ</td>
										</tr>
										<tr>
											<td>10</td>
											<td><span class="klav">S</span></td>
											<td>ß</td>
											<td>ẞ</td>
										</tr>
										<tr>
											<td>11</td>
											<td><span class="klav">D</span></td>
											<td>ð</td>
											<td>Ð</td>
										</tr>
										<tr>
											<td>12</td>
											<td><span class="klav">H</span></td>
											<td>ĥ</td>
											<td>Ĥ</td>
										</tr>
										<tr>
											<td>13</td>
											<td><span class="klav">J</span></td>
											<td>ĵ</td>
											<td>Ĵ</td>
										</tr>
										<tr>
											<td>14</td>
											<td><span class="klav">L</span></td>
											<td>ł</td>
											<td>Ł</td>
										</tr>
										<tr>
											<td>15</td>
											<td><span class="klav">X</span></td>
											<td>x</td>
											<td>X</td>
										</tr>
										<tr>
											<td>16</td>
											<td><span class="klav">N</span></td>
											<td>ñ</td>
											<td>Ñ</td>
										</tr>
									</tbody>
								</table>
							</div>
							<p>Koncerne la <span style="color: rgb(250, 173, 30); font-weight: bold;">greka alfabeto</span>, vi povas skribi tiajn literojn uzante la senpaŝklavkombinaĵon <span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="shift">⇧ Shift</span><span class="plus"> + </span>G</span> kiam <span class="klav">⇪ CAPS-Lock</span> estas ŝaltita (alivorte, kiam la latina alfabeto estas ebligita). En la <a href="#elektita_vidklavarfasono">ekzempla vidklavaro</a> ĉe la komenco de ĉi tiu sekcio, vi povas vidi la grekliteroj oranĝkolore.</p>
							<div class="tg-wrap">
								<table id="tg-tOU6v">
									<thead>
									  <tr>
										<th rowspan="2" style="border-style: solid solid solid solid;">N°</th>
										<th rowspan="2" style="border-style: solid solid solid none;">Klavo</th>
										<th colspan="2">Greklitero</th>
									  </tr>
									  <tr>
										<th style="border-style: solid solid solid none;">Minuskla</th>
										<th>Majuskla</th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td>1</td>
										<td><span class="klav">Q</span></td>
										<td>·</td>
										<td>·</td>
									  </tr>
									  <tr>
										<td>2</td>
										<td><span class="klav">W</span></td>
										<td>ς</td>
										<td>ς</td>
									  </tr>
									  <tr>
										<td>3</td>
										<td><span class="klav">E</span></td>
										<td>ε</td>
										<td>Ε</td>
									  </tr>
									  <tr>
										<td>4</td>
										<td><span class="klav">R</span></td>
										<td>ρ</td>
										<td>Ρ</td>
									  </tr>
									  <tr>
										<td>5</td>
										<td><span class="klav">T</span></td>
										<td>τ</td>
										<td>Τ</td>
									  </tr>
									  <tr>
										<td>6</td>
										<td><span class="klav">Y</span></td>
										<td>υ</td>
										<td>Υ</td>
									  </tr>
									  <tr>
										<td>7</td>
										<td><span class="klav">U</span></td>
										<td>θ</td>
										<td>Θ</td>
									  </tr>
									  <tr>
										<td>8</td>
										<td><span class="klav">I</span></td>
										<td>ι</td>
										<td>Ι</td>
									  </tr>
									  <tr>
										<td>9</td>
										<td><span class="klav">O</span></td>
										<td>ο</td>
										<td>Ο</td>
									  </tr>
									  <tr>
										<td>10</td>
										<td><span class="klav">P</span></td>
										<td>π</td>
										<td>Π</td>
									  </tr>
									  <tr>
										<td>11</td>
										<td><span class="klav">A</span></td>
										<td>α</td>
										<td>Α</td>
									  </tr>
									  <tr>
										<td>12</td>
										<td><span class="klav">S</span></td>
										<td>σ</td>
										<td>Σ</td>
									  </tr>
									  <tr>
										<td>13</td>
										<td><span class="klav">D</span></td>
										<td>δ</td>
										<td>Δ</td>
									  </tr>
									  <tr>
										<td>14</td>
										<td><span class="klav">F</span></td>
										<td>φ</td>
										<td>Φ</td>
									  </tr>
									  <tr>
										<td>15</td>
										<td><span class="klav">G</span></td>
										<td>γ</td>
										<td>Γ</td>
									  </tr>
									  <tr>
										<td>16</td>
										<td><span class="klav">H</span></td>
										<td>η</td>
										<td>Η</td>
									  </tr>
									  <tr>
										<td>17</td>
										<td><span class="klav">J</span></td>
										<td>ξ</td>
										<td>Ξ</td>
									  </tr>
									  <tr>
										<td>18</td>
										<td><span class="klav">K</span></td>
										<td>κ</td>
										<td>Κ</td>
									  </tr>
									  <tr>
										<td>19</td>
										<td><span class="klav">L</span></td>
										<td>λ</td>
										<td>Λ</td>
									  </tr>
									  <tr>
										<td>20</td>
										<td><span class="klav">Z</span></td>
										<td>ζ</td>
										<td>Ζ</td>
									  </tr>
									  <tr>
										<td>21</td>
										<td><span class="klav">X</span></td>
										<td>χ</td>
										<td>Χ</td>
									  </tr>
									  <tr>
										<td>22</td>
										<td><span class="klav">C</span></td>
										<td>ψ</td>
										<td>Ψ</td>
									  </tr>
									  <tr>
										<td>23</td>
										<td><span class="klav">V</span></td>
										<td>ω</td>
										<td>Ω</td>
									  </tr>
									  <tr>
										<td>24</td>
										<td><span class="klav">B</span></td>
										<td>β</td>
										<td>Β</td>
									  </tr>
									  <tr>
										<td>25</td>
										<td><span class="klav">N</span></td>
										<td>ν</td>
										<td>Ν</td>
									  </tr>
									  <tr>
										<td>26</td>
										<td><span class="klav">M</span></td>
										<td>μ</td>
										<td>Μ</td>
									  </tr>
									</tbody>
								</table>
							</div>
						</section>
						<section id="agordebleco-sec">

							<h3 id="agordebleco">★ b. Adaptebleco kaj agordebla klavaranĝo</h3>
							<p>Ĉi tiu virtuala Keymana klavarfasono aŭtomate adaptiĝas al via ordinara <abbr title="Se vi uzas nelatinan klavaron, vi devos agordi Keyman por ke uzu virtualan latinan klavarfasonon.">latina<span class="info_icon">i</span></abbr> klavaranĝo, sed ĉi tiu procezo ne okazas komplete, do vi devos agordi ĝin per la Keymanaj agordoj. La virtuala klavarfasono adaptiĝas al la posicio de viaj literaj klavoj (kaj de aliaj skribsignoj); tiu aranĝo ĝenerale estas QWERTY sed kelkaj landoj uzas aliajn, kiel Francio aŭ Germanio, kiuj uzas la AZERTY-n kaj QWERTZ-n, respektive. Se vi uzas QWERTY-n la nova virtuala klavaranĝo estos ŜĜERTŬ <span class="ŝava">(𐑖𐑡𐑧𐑮𐑑𐑘)</span>, AZERTY iĝos AZERTŬ-n <span class="ŝava">(𐑨𐑟𐑧𐑮𐑑𐑘)</span> kaj tiel plu.</p>
							<p>La plimulto de la simbolklavoj funkcios normale sed kelkaj el ili estos ŝanĝitaj por ebli la uzado de novaj plilongigitaj diakritaĵoj. Ĉi tiuj estos utilaj se vi volas skribi iun neesperantan vorton per la latina alfabeto; kvankam ĝi ne estis la origina celo de la klavaro, ĉi tiu funkcieco estis aldonita en serĉo de internacieco. Mi ankaŭ aldonis la ebleco je uzi la grekan alfabeton per la klavkombinaĵo <span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="shift">⇧ Shift</span><span class="plus"> + </span>G</span>, ĉar ili estas multe uzataj de matematiko. Vi ankaŭ povas agordi ĉi tion ĉe la Keymanaj agordoj.</p>
							<p>Estas 23 senpaŝklavoj, kiuj estas aldonitaj de ĉi tiu klavarfasono, do vi povas fari entute ducent okdek du diakritaĵojn. Por fari la ilin, vi devas premi la respektivan senpaŝklavon kaj poste tajpi la literklavon, kiun vi volas diakritigi. Certiĝu, ke la latina litertavolo estas aktivigita kiam vi premas la klavon diakritotan.</p>
							<div class="tg-wrap">
								<table class="tg">
									<thead>
										<tr>
											<th>N°</th>
											<th>Diakrito</th>
											<th>Agordebla</th>
											<th>Senpaŝa klavo</th>
											<th><span class="klav">A</span></th>
											<th><span class="klav">B</span></th>
											<th><span class="klav">C</span></th>
											<th><span class="klav">D</span></th>
											<th><span class="klav">E</span></th>
											<th><span class="klav">F</span></th>
											<th><span class="klav">G</span></th>
											<th><span class="klav">H</span></th>
											<th><span class="klav">I</span></th>
											<th><span class="klav">J</span></th>
											<th><span class="klav">K</span></th>
											<th><span class="klav">L</span></th>
											<th><span class="klav">M</span></th>
											<th><span class="klav">N</span></th>
											<th><span class="klav">O</span></th>
											<th><span class="klav">P</span></th>
											<th><span class="klav">Q</span></th>
											<th><span class="klav">R</span></th>
											<th><span class="klav">S</span></th>
											<th><span class="klav">T</span></th>
											<th><span class="klav">U</span></th>
											<th><span class="klav">V</span></th>
											<th><span class="klav">W</span></th>
											<th><span class="klav">X</span></th>
											<th><span class="klav">Y</span></th>
											<th><span class="klav">Z</span></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="tg-xql2">1</td>
											<td class="tg-xql2">Dekstra korno</td>
											<td class="yes">✓</td>
											<td class="tg-xql2"><span class="klav">´</span> aŭ <span class="klav">/</span></td>
											<td class="tg-8l95">Á</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ć</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">É</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ǵ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Í</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ḱ</td>
											<td class="tg-8l95">Ĺ</td>
											<td class="tg-8l95">Ḿ</td>
											<td class="tg-8l95">Ń</td>
											<td class="tg-8l95">Ó</td>
											<td class="tg-8l95">Ṕ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ŕ</td>
											<td class="tg-8l95">Ś</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ú</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ẃ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ý</td>
											<td class="tg-8l95">Ź</td>
										</tr>
										<tr>
											<td class="tg-xql2">2</td>
											<td class="tg-xql2">Maldekstra korno</td>
											<td class="yes">✓</td>
											<td class="tg-xql2"><span class="klav">`</span> aŭ <span class="klav">\</span></td>
											<td class="tg-8l95">À</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">È</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ì</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ǹ</td>
											<td class="tg-8l95">Ò</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ù</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ẁ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ỳ</td>
											<td class="tg-8l95"></td>
										</tr>
										<tr>
											<td class="tg-xql2">3</td>
											<td class="tg-xql2">Ĉapelo</td>
											<td class="not">✗</td>
											<td class="tg-xql2"><span class="klav">^</span></td>
											<td class="tg-8l95">Â</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ĉ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ê</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ĝ</td>
											<td class="tg-8l95">Ĥ</td>
											<td class="tg-8l95">Î</td>
											<td class="tg-8l95">Ĵ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ô</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ŝ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Û</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ŵ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ŷ</td>
											<td class="tg-8l95">Ẑ</td>
										</tr>
										<tr>
											<td class="tg-xql2">4</td>
											<td class="tg-xql2">Kontraŭĉapelo</td>
											<td class="yesno">⚠</td>
											<td class="tg-xql2"><span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="shift">⇧ SHIFT</span><span class="plus"> + </span>V</span></td>
											<td class="tg-8l95">Ǎ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Č</td>
											<td class="tg-8l95">Ď</td>
											<td class="tg-8l95">Ě</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ǧ</td>
											<td class="tg-8l95">Ȟ</td>
											<td class="tg-8l95">Ǐ</td>
											<td class="orange">ǰ</td>
											<td class="tg-8l95">Ǩ</td>
											<td class="tg-8l95">Ľ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ň</td>
											<td class="tg-8l95">Ǒ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ř</td>
											<td class="tg-8l95">Š</td>
											<td class="tg-8l95">Ť</td>
											<td class="tg-8l95">Ǔ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ž</td>
										</tr>
										<tr>
											<td class="tg-fymr">5</td>
											<td class="tg-fymr">Luneto</td>
											<td class="yesno">⚠</td>
											<td class="tg-0pky"><span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="shift">⇧ SHIFT</span><span class="plus"> + </span>U</span></td>
											<td class="tg-c3ow">Ă</td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow">Ĕ</td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow">Ğ</td>
											<td class="tg-c3ow">Ḫ</td>
											<td class="tg-c3ow">Ĭ</td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow">Ɫ</td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow">Ŏ</td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow">Ŭ</td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow"></td>
											<td class="tg-c3ow"></td>
										</tr>
										<tr>
											<td class="tg-xql2">6</td>
											<td class="tg-xql2">Tildo</td>
											<td class="not">✗</td>
											<td class="tg-xql2"><span class="klav">~</span></td>
											<td class="tg-8l95">Ã</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ẽ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ĩ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Õ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ũ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
										</tr>
										<tr>
											<td class="tg-xql2">7</td>
											<td class="tg-xql2">Tremao</td>
											<td class="yes">✓</td>
											<td class="tg-xql2"><span class="klav">¨</span> aŭ <span class="klav">:</span></td>
											<td class="tg-8l95">Ä</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ë</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ḧ</td>
											<td class="tg-8l95">Ï</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ö</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="orange">ẗ</td>
											<td class="tg-8l95">Ü</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ẅ</td>
											<td class="tg-8l95">Ẍ</td>
											<td class="tg-8l95">Ÿ</td>
											<td class="tg-8l95"></td>
										</tr>
										<tr>
											<td class="tg-xql2">8</td>
											<td class="tg-xql2">Superpunkto</td>
											<td class="not">✗</td>
											<td class="tg-sjhj"><span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span>.</span></td>
											<td class="tg-8l95">Ȧ</td>
											<td class="tg-8l95">Ḃ</td>
											<td class="tg-8l95">Ċ</td>
											<td class="tg-8l95">Ḋ</td>
											<td class="tg-8l95">Ė</td>
											<td class="tg-8l95">Ḟ</td>
											<td class="tg-8l95">Ġ</td>
											<td class="tg-8l95">Ḣ</td>
											<td class="tg-8l95">İ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ŀ</td>
											<td class="tg-8l95">Ṁ</td>
											<td class="tg-8l95">Ṅ</td>
											<td class="tg-8l95">Ȯ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ṙ</td>
											<td class="tg-8l95">Ṡ</td>
											<td class="tg-8l95">Ṫ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ẇ</td>
											<td class="tg-8l95">Ẋ</td>
											<td class="tg-8l95">Ẏ</td>
											<td class="tg-8l95">Ż</td>
										</tr>
										<tr>
											<td class="tg-xql2">9</td>
											<td class="tg-xql2">Subpunkto</td>
											<td class="not">✗</td>
											<td class="tg-xql2"><span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="shift">⇧ SHIFT</span><span class="plus"> + </span>.</span></td>
											<td class="tg-8l95">Ạ</td>
											<td class="tg-8l95">Ḅ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ḍ</td>
											<td class="tg-8l95">Ẹ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ḥ</td>
											<td class="tg-8l95">Ị</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ḳ</td>
											<td class="tg-8l95">Ḷ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ṇ</td>
											<td class="tg-8l95">Ọ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ṛ</td>
											<td class="tg-8l95">Ṣ</td>
											<td class="tg-8l95">Ṭ</td>
											<td class="tg-8l95">Ụ</td>
											<td class="tg-8l95">Ṿ</td>
											<td class="tg-8l95">Ẉ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ỵ</td>
											<td class="tg-8l95">Ẓ</td>
										</tr>
										<tr>
											<td class="tg-xql2">10</td>
											<td class="tg-xql2">Ringo</td>
											<td class="not">✗</td>
											<td class="tg-xql2"><span class="klav">°</span></td>
											<td class="tg-8l95">Å</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ů</td>
											<td class="tg-8l95"></td>
											<td class="orange">ẘ</td>
											<td class="tg-8l95"></td>
											<td class="orange">ẙ</td>
											<td class="tg-8l95"></td>
										</tr>
										<tr>
											<td class="tg-xql2">11</td>
											<td class="tg-xql2">Dekstra subhoko</td>
											<td class="not">✗</td>
											<td class="tg-xql2"><span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="shift">⇧ SHIFT</span><span class="plus"> + </span>,</span></td>
											<td class="tg-8l95">Ą</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ę</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Į</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ǫ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ų</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
										</tr>
										<tr>
											<td class="tg-xql2">12</td>
											<td class="tg-xql2">Maldekstra subhoko</td>
											<td class="not">✗</td>
											<td class="tg-xql2"><span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span>,</span></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ç</td>
											<td class="tg-8l95">Ḑ</td>
											<td class="tg-8l95">Ȩ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ģ</td>
											<td class="tg-8l95">Ḩ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ķ</td>
											<td class="tg-8l95">Ļ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ņ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ŗ</td>
											<td class="tg-8l95">Ş</td>
											<td class="tg-8l95">Ţ</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
										</tr>
										<tr>
											<td class="tg-xql2">13</td>
											<td class="tg-xql2">Makrono</td>
											<td class="not">✗</td>
											<td class="tg-sjhj"><span class="klav">-</span></td>
											<td class="tg-8l95">Ā</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ē</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ī</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ō</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95">Ū</td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
											<td class="tg-8l95"></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div>
								<p class="text_min"><b>*Per la klavaraj agordoj, la senpaŝklavoj kun la simbolo <span class="yesno">⚠</span> nur povas esti ebligitaj aŭ malebligitaj.</b></p>
								<p class="text_min"><b>**La ĉeloj, kiuj estas markitaj <span style="color: rgb(250, 173, 30); font-weight: bold;">oranĝkolore</span>, funkcias nur minuskle pro Unikodaj limigoj.</b></p>
							</div>
							<p>Kelkaj kutimaj senpaŝklavoj nur funkcios ĝuste se vi havas la opcion "Trakti aparatajn senpaŝklavojn kiel simplajn klavojn" <i>(Treat hardware deadkeys as plain keys,</i> angle) ŝaltita. Bonvolu aktivigi ĉi tiun opcion el la sekcio "altnivela" en la opcioj de Keyman.</p>
							<div class="noto flava">
								<ul class="horizontala">
									<li><img class="info_png" src="alert.png" alt="info_logo"></li>
									<li>
										<p><i>Dum la kreado de la agorda paĝo, tiu ĉi nur funkcias kun Keymano ĉe <span class="klav windows">Vindozo <img src="win11_logo.png" height="10px" weight="auto"/></span> aŭ <span class="klav linux">Linukso <img src="linux_logo.png" height="10px" weight="auto"/></span>. Tio ĉi eble ŝanĝiĝos estontece; aktuale, ĉi tiaj agordoj de la Keymanaj klavaroj (options.htm) funkcias ĉe <a href="https://help.keyman.com/developer/language/reference/if#toc-platforms">tiuj ĉi platformoj</a>.
											Se vi uzantas na <span class="klav apple">macOS <img src="apple_logo.png" height="10px" weight="auto"/></span> vi ne povos agordi la senpaŝklavojn. Konsideru ankaŭ, ke sur klavaroj de komputiloj, kiuj uzas tiun operaciumon, la klavo <span class="klav"><span class="RALT">ALT</span></span> povus esti <span class="klav"><span class="RALT">Option ⌥</span></span>.
											<br/>
										</i></p>
									</li>
								</ul>
							</div>
							<p>Ĉe la opcioj de la klavarfasono aperos resumo koncerne la senpaŝklavoj, kiujn vi elektis. Jen resumo pri la defaŭltaj agordoj:</p>
							<div style="margin: 0 auto;">
								<p>
									<i></i>
									<ol style="padding:0%; text-align: center; list-style-position: inside; margin-bottom: 0.1em;">
										<li id="cxe_fino1"><b class="ekdem">Ĉe: </b>
											<span id="cxe_fino2"><span class="klav"><span class="shift">⇧ SHIFT</span><span class="plus"> + </span>2<span class="plus"> ⇒ </span><span class="simbolo">@</span></span><br><br class="brcomplete"></span>
										</li>
										<li id="trema_fino1"><b class="ekdem">Tremaoj: </b>
											<span id="trema_fino2"><span class="klav">:<span class="plus"> &gt; </span>Latina Litero<span class="plus"> ⇒ </span><span class="simbolo">tremaaĵo</span></span><br>Ekzemple: <span class="klav">:<span class="plus"> &gt; </span>A<span class="plus"> ⇒ </span><span class="simbolo">ä</span></span> | <span class="klav">:<span class="plus"> &gt; </span>:<span class="plus"> ⇒ </span><span class="simbolo">:</span></span><br><br class="brcomplete"></span></li>
										<li id="dkorn_fino1"><b class="ekdem">Dekstraj kornoj:</b>
											<span id="dkorn_fino2"><span class="klav">/<span class="plus"> + </span>LatL<span class="plus"> ⇒ </span><span class="simbolo">dekstrkornaĵo LatL</span></span><br>Ekzemple: <span class="klav">/<span class="plus"> &gt; </span>E<span class="plus"> ⇒ </span><span class="simbolo">é</span></span> | <span class="klav">/<span class="plus"> &gt; </span>/<span class="plus"> ⇒ </span><span class="simbolo">/</span></span><br><br class="brcomplete"></span>
										</li>
										<li id="mdkorn_fino1"><b class="ekdem">Maldekstraj kornoj: </b>
											<span id="mdkorn_fino2"><span class="klav">\<span class="plus"> &gt; </span>LatL<span class="plus"> ⇒ </span><span class="simbolo">maldekstrkornaĵo</span></span><br>Ekzemple: <span class="klav">\<span class="plus"> &gt; </span>E<span class="plus"> ⇒ </span><span class="simbolo">è</span></span> | <span class="klav">\<span class="plus"> &gt; </span>\<span class="plus"> ⇒ </span><span class="simbolo">\</span></span><br><br class="brcomplete"></span>
										</li>
										<li id="kcxapelo_fino1"><b class="ekdem">Kontraŭĉapeloj: </b>
											<span id="kcxapelo_fino2"><span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="⇧ shift">⇧ SHIFT</span><span class="plus"> + </span>V<span class="plus"> &gt;</span> LatL<span class="plus"> ⇒ </span><span class="simbolo">kontraŭĉapelaĵo</span></span><br>Ekzemple: <span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="⇧ shift">⇧ SHIFT</span><span class="plus"> + </span>V<span class="plus"> &gt;</span> Z<span class="plus"> ⇒ </span><span class="simbolo">ž</span></span><br><br class="brcomplete"></span>
										</li>
										<li id="lunet_fino1"><b class="ekdem">Lunetoj: </b>
											<span id="lunet_fino2"><span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="⇧ shift">⇧ SHIFT</span><span class="plus"> + </span>U<span class="plus"> &gt;</span> LatL<span class="plus"> ⇒ </span><span class="simbolo">lunetaĵo</span></span><br>Ekzemple: <span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="⇧ shift">⇧ SHIFT</span><span class="plus"> + </span>U<span class="plus"> &gt;</span> A<span class="plus"> ⇒ </span><span class="simbolo">ă</span></span><br><br class="brcomplete"></span>
										</li>
										<li id="greka_fino1"><b class="ekdem">Grekaj literoj: </b>
											<span id="greka_fino2"><span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="⇧ shift">⇧ SHIFT</span><span class="plus"> + </span>G<span class="plus"> &gt;</span> LatL<span class="plus"> ⇒ </span><span class="simbolo">greka litero</span></span><br>Ekzemple: <span class="klav"><span class="RALT">⇮ ALTGr</span><span class="plus"> + </span><span class="⇧ shift">⇧ SHIFT</span><span class="plus"> + </span>G<span class="plus"> &gt;</span> P<span class="plus"> ⇒ </span><span class="simbolo">π</span></span><br><br class="brcomplete"></span>
										</li>
									</ol>
									<p class="text_min" style="margin-top: 0.0em;"><b>*(LatL = Latina Litero)</b></p>
								</p>
							</div>
						</section>
					</section>
					<div class="blank"></div>
					<hr>
					<div class="blank2"></div>
					<section id="sec_telefona" name="sec_telefona">
						<h2 id="saĝver">★ 2. Saĝtelefona versio</h2>
						<p>La saĝtelefona versio funkcias per Keyman funkcianta ĉe <span class="klav android"><img src="Android.png" height="10px" weight="auto"> Android</span>, <span class="klav apple"><img src="apple_logo.png" height="10px" weight="auto"> iOS</span> aŭ <span class="klav apple"><img src="apple_logo.png" height="10px" weight="auto"> iPadOS</span>. Ĝi havas plurajn klavartavolojn; ili estas unu ŝava, la latinaj minuskloj kaj majuskloj, grekaj minuskloj kaj majuskloj, kaj du simboltavoloj. Vi ankaŭ povos tajpi aliajn rilatajn skribsignojn per la daŭra premo de la respektiva klavo.</p>
						<div class="noto" style="background-color: rgb(199, 120, 120);">
							<ul class="horizontala">
								<li><img class="info_png" src="cancel.png" alt="error_logo"></li>
								<li>
									<p style="color: white;"><i>Eble Keyman duoble instalos la klavaron en via saĝtelefono; la saĝtelefonan kaj la komputilan version (kompreneble la lasta tute ne funckios per via saĝtelefono). Bonvolu, se ĝi okazas, malinstalu la komputilan version (nomita kiel Ŝava Esperanto) en la agordoj de Keyman kaj nur lasu la klavaron nomita kiel "Ŝava Esperanto (Saĝtelefona)"̇. Ne scias mi kial okazas tiu ĉi eraro, pardonu.</i>
										<br/>
									</p>
								</li>
							</ul>
						</div>
						<section>
							<h3 id="saĝ_tavoloj">★ a. Klavartavoloj</h3>
							<p>La sâgtelefona versio havas plurajn klavartavolojn; unu ŝavidan (starlingŝavan kun proponaĵojn de Pokrovskij), du latinajn (minusklojn kaj majusklojn), du grekajn (minusklojn kaj majusklojn) kaj du simbolajn. Koncerne la litertavoloj vi povas interŝanĝi ilin per la klavo <span class="ŝava klav">𐑖𐑨𐑝𐑨</span>, <span class="klav">abc</span> aŭ <span class="klav">αβγ</span> (la daŭra premo de iu el ĉi tiu klavoj montros alian alfabeton el ili), kaj la simboltavoloj povas esti interŝanĝitaj per la klavoj <span class="klav">123</span> aŭ <span class="klav">~¿¡</span>. Kompreneble la klavo <span class="klav">⇧</span> eblas la skribadon de latinaj aŭ grekaj majuskloj, depende de la litertavolo.</p>
							<div id="sag_kvadrato" class="div_interaga" style="text-align: center; max-width: 900px; margin: 30px auto;">
								<p style="text-align: center"><i>Alkliku la subajn butonojn por vidi la klavartavolojn de la saĝtelefona versio:</i></p>
								<img id="sag_img_sxa" src="sag_sxa.png" />
								<img id="sag_img_latmin" src="sag_latmin.png" style="display:none"/>
								<img id="sag_img_latmaj" src="sag_latmaj.png" style="display:none"/>
								<img id="sag_img_gremin" src="sag_gremin.png" style="display:none"/>
								<img id="sag_img_gremaj" src="sag_gremaj.png" style="display:none"/>
								<img id="sag_img_simbo1" src="sag_simbo1.png" style="display:none"/>
								<img id="sag_img_simbo2" src="sag_simbo2.png" style="display:none"/>
								<p></p>
								<ul id="horizontala_sag_1">
									<ul class="horizontala_sag_3" style="margin-right: 0px !important;">
										<button class="butono_verda butono_elektita" id="butono_sag_sxa" style="vertical-align:middle" onclick="montri_sag_sxa()"><span>Ŝava klavartavolo</span></button>
									</ul>
									<ul class="horizontala_sag_4">
										<ul class="horizontala_sag_2" style="margin-left: 5px !important;">
											<button class="butono_verda " id="butono_sag_latmin" style="vertical-align:middle" onclick="montri_sag_latmin()"><span>Latinaj minuskloj </span></button>
											<button class="butono_verda " id="butono_sag_gremin" style="vertical-align:middle" onclick="montri_sag_gremin()"><span>Grekaj minuskloj </span></button>
											<button class="butono_verda " id="butono_sag_simbo1" style="vertical-align:middle" onclick="montri_sag_simbo1()"><span>Unua simboltavolo </span></button>
										</ul>
										<ul class="horizontala_sag_2" style="margin-left: 5px !important;">
											<button class="butono_verda " id="butono_sag_latmaj" style="vertical-align:middle" onclick="montri_sag_latmaj()"><span>Latinaj majuskloj </span></button>
											<button class="butono_verda " id="butono_sag_gremaj" style="vertical-align:middle" onclick="montri_sag_gremaj()"><span>Grekaj majuskloj   </span></button>
											<button class="butono_verda " id="butono_sag_simbo2" style="vertical-align:middle" onclick="montri_sag_simbo2()"><span>Dua simboltavolo   </span></button>
										</ul>
									</ul>
								</ul>
							</div>
						</section>
						<section>	
							<h3 id="saĝ_daŭr">★ b. Daŭra premado</h3>
							<p>Daŭra premado de iu ajn klavo el la unua vico, eblas al vi rapide tajpi la respektivan ciferon laŭ sia posicio (el la litero <span class="klav ŝava">𐑖</span> pluen, kaze de la ŝava litertavolo).</p>
							<p>Estas kvar latinaj literoj kiuj ne ekzistas Esperante, do ili estis anstataŭigitaj je la esperantaj ĉapelitaj literoj (aŭ lunetita, kaze de Ŭ) por sekvi la SĜERTŬ-an klavarfasonon (bazita el la ordinara QWERTY-a klavarfasono) en la saĝtelefona versio de la klavaro. Tio ĉi okazas sur la ŝavaj kaj latinaj litertavoloj; sur la latinaj litertavoloj vi povos daŭre premi la respektivan klavon por tajpi la originalan QWERTY-leteron.</p>
							<div class="tg-wrap">
							<table class="tg" id="tg-MtM91">
								<thead>
									<tr>
										<th class="tg-wgqg" rowspan="2" style="border-style: solid solid solid solid;">N°</th>
										<th class="tg-wgqg" rowspan="2" style="border-style: solid solid solid none;">Antikva <br/>neesperantlatina<br/>klavo</th>
										<th class="tg-wgqg" rowspan="2" style="border-style: solid solid solid none;">Ŝava</th>
										<th class="tg-wgqg" colspan="2">Esperantlatina litero</th>
									</tr>
									<tr>
										<th class="tg-wgqg" style="border-style: solid solid solid none;">Minuskla</th>
										<th class="tg-ru17">Majuskla</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="tg-u5bg">1</td>
										<td class="tg-5ioy"><span class="klav">Q</span></td>
										<td class="tg-5ioy"><span class="ŝava">𐑖</span></td>
										<td class="tg-5ioy">ŝ</td>
										<td class="tg-0lax">Ŝ</td>
									</tr>
									<tr>
										<td class="tg-u5bg">2</td>
										<td class="tg-5ioy"><span class="klav">W</span></td>
										<td class="tg-5ioy"><span class="ŝava">𐑡</span></td>
										<td class="tg-5ioy">ĝ</td>
										<td class="tg-0lax">Ĝ</td>
									</tr>
									<tr>
										<td class="tg-u5bg">3</td>
										<td class="tg-5ioy"><span class="klav">Y</span></td>
										<td class="tg-5ioy"><span class="ŝava">𐑘</span></td>
										<td class="tg-5ioy">ŭ</td>
										<td class="tg-0lax">Ŭ</td>
									</tr>
									<tr>
										<td class="tg-u5bg">4</td>
										<td class="tg-5ioy"><span class="klav">X</span></td>
										<td class="tg-5ioy"><span class="ŝava">𐑗</span></td>
										<td class="tg-5ioy">ĉ</td>
										<td class="tg-0lax">Ĉ</td>
									</tr>
								</tbody>
							</table>
							</div>
							<p>Sur la starlingŝava litertavolo estas inkludita la klavo <span class="klav ŝava">𐑰</span>. Premantade la literojn <span class="klav ŝava">𐑘</span>, <span class="klav ŝava">𐑩</span> kaj <span class="klav ŝava">𐑟</span> vi povas tajpi aliajn ŝavajn literojn:</p>					
							<div class="tg-wrap">
								<table>
									<thead>
										<tr>
											<th>N°</th>
											<th>Klavo</th>
											<th colspan="2">Daŭra premado</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><span class="klav ŝava">𐑘</span></td>
											<td><span class="ŝava">𐑲</span></td>
											<td><span class="ŝava">𐑱</span></td>
										</tr>
										<tr>
											<td>2</td>
											<td><span class="ŝava"><span class="klav ŝava">𐑩</span></span></td>
											<td colspan="2"><span class="ŝava">𐑳</span></td>
										</tr>
										<tr>
											<td>3</td>
											<td><span class="ŝava klav">𐑟</span></td>
											<td colspan="2"><span class="ŝava">𐑞</span></td>
										</tr>
									</tbody>
								</table>
							</div>
							<p>Sur la latina litertavolo vi povas daŭre premi vokalon por tajpi iun ajn el siajn diakritaĵojn:</p>
							<div class="tg-wrap">
								<table id="tg-lWWyf">
									<thead>
										<tr>
											<th rowspan="2">N°</th>
											<th rowspan="2">Diakrito</th>
											<th colspan="5">Vokalo</th>
										</tr>
										<tr>
											<th>A</th>
											<th>E</th>
											<th>I</th>
											<th>O</th>
											<th>U</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Dekstra korno</td>
											<td>Á</td>
											<td>É</td>
											<td>Í</td>
											<td>Ó</td>
											<td>Ú</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Maldekstra korno</td>
											<td>À</td>
											<td>È</td>
											<td>Ì</td>
											<td>Ò</td>
											<td>Ù</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Ĉapelo</td>
											<td>Â</td>
											<td>Ê</td>
											<td>Î</td>
											<td>Ô</td>
											<td>Û</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Kontraŭĉapelo</td>
											<td>Ǎ</td>
											<td>Ě</td>
											<td>Ǐ</td>
											<td>Ǒ</td>
											<td>Ǔ</td>
										</tr>
										<tr>
											<td>5</td>
											<td>Ringo</td>
											<td>Å</td>
											<td></td>
											<td></td>
											<td></td>
											<td>Ů</td>
										</tr>
										<tr>
											<td>6</td>
											<td>Superpunkto</td>
											<td>Ȧ</td>
											<td>Ė</td>
											<td>İ</td>
											<td>Ȯ</td>
											<td></td>
										</tr>
										<tr>
											<td>7</td>
											<td>Tremao</td>
											<td>Ä</td>
											<td>Ë</td>
											<td>Ï</td>
											<td>Ö</td>
											<td>Ü</td>
										</tr>
										<tr>
											<td>8</td>
											<td>Tildo</td>
											<td>Ã</td>
											<td>Ẽ</td>
											<td>Ĩ</td>
											<td>Õ</td>
											<td>Ũ</td>
										</tr>
										<tr>
											<td>9</td>
											<td>Makrono</td>
											<td>Ā</td>
											<td>Ē</td>
											<td>Ī</td>
											<td>Ō</td>
											<td>Ū</td>
										</tr>
										<tr>
											<td>10</td>
											<td>Luneto</td>
											<td>Ă</td>
											<td>Ĕ</td>
											<td>Ĭ</td>
											<td>Ŏ</td>
											<td>Ŭ</td>
										</tr>
										<tr>
											<td>11</td>
											<td>Dekstra subhoko</td>
											<td>Ą</td>
											<td>Ę</td>
											<td>Į</td>
											<td>Į</td>
											<td>Ų</td>
										</tr>
										<tr>
											<td>12</td>
											<td>Maldekstra subhoko</td>
											<td></td>
											<td>Ȩ</td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>13</td>
											<td>Subpunkto</td>
											<td>Ạ</td>
											<td>Ẹ</td>
											<td>Ị</td>
											<td>Ọ</td>
											<td>Ụ</td>
										</tr>
									</tbody>
								</table>
							</div>
													
						</section>
					</section>
					<div class="blank"></div>
					<hr>
					<div class="blank2"></div>
					<section name="sec_reta" id="sec_reta">
						<h2 id="retver">★ 3. Reta versio</h2>
						<p>Estontece ekzistos reta versio, kiu estas resumita versio de la komputila versio. Ĝi povas esti inkludota ĉe aliaj retejoj por ebligi la ŝavan skribadon de Esperanto per Keyman Web. Ĝi estas bazita je la usona klavarfasono kaj ĝi estas nek adaptebla nek agordebla kaj ĝi ne havas grekliterojn. Bedaŭrinde, ĉi tiu simpligo estas pro limigoj de Keyman kaj tio implikas la rearanĝon de la klavartavoloj.</p>
						<p>La klavartavoloj, kiujn ĝi inkludas, estas: du ŝavaj (baza kaj alterna), kvar latinaj (minuskla, majuskla kaj siaj alternaj) kaj du simbolaj (baza kaj shiftita). En la sekva tabelo estas la modifklavoj, kiuj aktivigas ilin:</p>
						<div class="tg-wrap">
							<table id="tg-THICW">
								<thead>
									<tr>
										<th rowspan="2" style="border-style: solid solid solid solid;">Modifklavo</th>
										<th colspan="2">Literaj tavoloj</th>
										<th rowspan="2" style="border-style: solid solid solid none;">Simbolaj tavoloj</th>
									</tr>
									<tr>
										<th style="border-style: solid solid solid none;">Ŝava alfabeto</th>
										<th>Latina alfabeto</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Nenio</td>
										<td id="ret_sxa">Ŝavaj literoj</td>
										<td>←</td>
										<td>Baza simboltavolo</td>
									</tr>
									<tr>
										<td><span class="klav shift">⇧ SHIFT</span></td>
										<td>→</td>
										<td id="ret_latmin">Latinaj minuskloj</td>
										<td>Shiftita simboltavolo</td>
									</tr>
									<tr>
										<td><span class="klav RALT">⎇ ALT</span></td>
										<td>→</td>
										<td id="ret_latmaj">Latinaj majuskloj</td>
										<td>—</td>
									</tr>
									<tr>
										<td><span class="klav ctrl"><span class="helm">⎈</span> CTRL</span></td>
										<td id="ret_sxaalt">Proponaĵoj de Pokrovskij kaj Ĵ kaj Ĥ</td>
										<td>←</td>
										<td>—</td>
									</tr>
									<tr>
										<td><span class="klav"><span class="shift">⇧ SHIFT</span><span class="plus"> + </span><span class="ctrl"><span class="helm">⎈</span> CTRL</span></span></td>
										<td>→</td>
										<td id="ret_latminalt">Neesperantaj latinaj minuskloj (Q, W, Y, C) kaj Ĵ kaj Ĥ</td>
										<td>—</td>
									</tr>
									<tr>
										<td><span class="klav"><span class="RALT">⎇ ALT</span><span class="plus"> + </span><span class="ctrl"><span class="helm">⎈</span> CTRL</span></span></td>
										<td>→</td>
										<td id="ret_latmajalt">Neesperantaj latinaj majuskloj (Q, W, Y, C) kaj Ĵ kaj Ĥ</td>
										<td>—</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div id="ret_kvadrato" class="div_interaga" style="text-align: center; max-width: 700px; margin: 30px auto;">
							<p style="text-align: center"><i>Alkliku la subajn butonojn por vidi la klavartavolojn de la reta versio:</i></p>
							<img id="ret_img_sxa" src="ret_sxa.png" />
							<img id="ret_img_sxaalt" src="ret_sxaalt.png" style="display:none"/>
							<img id="ret_img_latmin" src="ret_latmin.png" style="display:none"/>
							<img id="ret_img_latmaj" src="ret_latmaj.png" style="display:none"/>
							<img id="ret_img_latminalt" src="ret_latminalt.png" style="display:none"/>
							<img id="ret_img_latmajalt" src="ret_latmajalt.png"style="display:none"/>
							<p></p>
							<ul id="horizontala_reta_1">
								<ul class="horizontala_reta_2">
									<button class="butono_verda butono_elektita" id="butono_ret_sxa" style="vertical-align:middle" onclick="montri_ret_sxa()"><span>Ŝava </span></button>
									<button class="butono_verda " id="butono_ret_latmin" style="vertical-align:middle" onclick="montri_ret_latmin()"><span>Latinaj minuskloj </span></button>
									<button class="butono_verda " id="butono_ret_latminalt" style="vertical-align:middle" onclick="montri_ret_latminalt()"><span>Aliaj latminuskloj </span></button>
								</ul>
								<ul class="horizontala_reta_2">
									<button class="butono_verda " id="butono_ret_sxaalt" style="vertical-align:middle" onclick="montri_ret_sxaalt()"><span>Alterna ŝava </span></button>
									<button class="butono_verda " id="butono_ret_latmaj" style="vertical-align:middle" onclick="montri_ret_latmaj()"><span>Latinaj majuskloj   </span></button>
									<button class="butono_verda " id="butono_ret_latmajalt" style="vertical-align:middle" onclick="montri_ret_latmajalt()"><span>Aliaj latmajuskloj   </span></button>
								</ul>
							</ul>
						</div>
					</section>
				</section>
				<div class="blank"></div>
				<hr>
				<div class="blank2"></div>
				<div id="finalo">
					<ul id="saluton" style="padding: 0px;">
						<li><img class="flago" id="ĉiliaflagohead" src="flago_cl.png" alt="Ĉilia flago"></li>
						<li>
							<p>Tomás Briones M.<br>El Ĉilio, Esperantujo.</p>
						</li>
						<li>
							<p><span class="ŝava">·𐑑𐑩𐑫𐑨𐑕𐑩 ·𐑚𐑮𐑦𐑩𐑵𐑧𐑕 ·𐑫.</span><br><span class="ŝava">𐑧𐑤 ·𐑗𐑦𐑤𐑦𐑩, ·𐑧𐑕𐑐𐑧𐑮𐑨𐑵𐑑𐑪𐑢𐑩.</span></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--<p> ----Sal', homarano! Jen Zamenhofo----

			MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWWWWWWWWWWWWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWWWNNXXXKK000OOOO00KKKXXNWWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWNX00OOkxxkkkkkkkxkkkkOO0OO00KKXXNWMMMMMMMMMMMMMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMMMWMMMMWNK0kxdddddxddddddxxdddxxkkOOOOOO000KXNNNWMMMMMMMMMMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMMMMMWN0xollloddxdddxdddddddddddxkxkkkkkOOOO0KXXXNNWMMMMMMMMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMMMWKxc;;::clodddddddoddddddddddxxxxxxxxkkOO00KKXNNNNWWMMMMMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMMNkc',;;;:clodoooooooooodxddoodddddxxxxxkkOO00KKXXNNNNNWMMMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMNd,',;;;:clooodoolllloooodddooooddxxxxxxxxxxkO000KXXNXXNWMMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMWO:',;:::clooooollllclloooddoodddddddddddddxxxkOO00KKXXXXNWMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMNd;;;::cclllllolllllllllooooooddxddddddxxxddxxkkOOO0KKXXXXXWWMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMM0c;;;:ccllcclloollllllloooooooddddddddddxxxdxxkkkOO00KKKKKKXWMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMWk;',;cllclcclllooolllllolloooodxxxdddxxdxxddxxkkkOOO0000KKKKNMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMXo,,;clolccccllllllllcclllllllllodddxxxxddddddxxxkOOOOOO0KKKKXWMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMM0c,;:llllcccclllcccllc:clc;,,,,,,,;;coddddddddxxxkOOOO00KKKK0XWMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMWOc;;cloolccccccccllllc::cccccccc:::;,;:cloddxxxkkOOOOOO000KKKKWMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMWk;;::loollccc:clllcc:::ccloddddddxdolccccllododdxxxdoollllodxkXMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMWMNkollccccllolc:colccc::cclcllodddoodddolccccloooooool::cclllllo0MMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMW0dolcclll:;::;:cclllolccc:::::ccccccccloolccloooodollodxkkOOOkxxKWMMMMMMMMMMM
			MMMMMMMMMMMMMMMMWOolcl:,,:ol:::;;,,;;cloolc::::;,'',,;;,;clllloooddollodxxxkxxxxxkKMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMNxdddxxd;,:c:;:cc::;::loooc;;:::::;:clc;;:ccoooddddoclllllolcloodOXMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMNkdddddo;.,c:,;::::cclodxkdc;:::ccccllccclc:clodddxdolooc:::cc;:ldOWMMMMMMMMMMM
			MMMMMMMMMMMMMMMMW0dddoool:cdc,',;:::cllloodolc:cccccccccooc:cclodxOxllodooolooooo:lKMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMXxoddodxl:c;'',;;;;:cllooddddolllcclllllllccllldxO0xooxdollclokdcdXMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMW0dddodxoc:;,,;;,,,;ccclodxddxxdddoollllcccccclodk0koodxxddoodxxkXMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMXkddoddooc;,;;,;,,;;:cclodxxkkxxxxdxxoc:ccccccldkOOdodxkkxxxxxx0WMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMNkoodollc;;::::;;;;:cc:cllodddxxxoool::cllccclxkkOxooxO000OOkkKMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMN0xolllc;;:c:c::;::cc::cccllloollllc;;:c::cclodxxxxooxkOOOOk0NMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMNX0d;',::clc:::;;:c::ccccccccllllc,.''.'',::ccclooloddkkkkXMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMMMW0;.,;::cc:::::::::cccllcccclccc:;,'''...'..',cllooodxxOWMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMMMMK:',,:cllc::::::ccclllc:ccccc::;,,,,,'',',,,;ccllloooxXMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMMMM0:'';:cclc:::::::ccccccccc:::::::c:;::::;;;::ccllloddOWMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMMMW0:'',::ccc::;;;:clllccc:;;;;:cc:::;;;cc:;',;;,,:llodx0WMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMMWXx,.',:c::;:;,;:::cllc:;,,',;:;,,,',;;;;;,''''.',;:cooxKWMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMMWO:,;'.',:c::;;,;:;;;::;,,,,,,,;;,;:clodxxxdoc;,'.';;;cloOWMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMMWO;.;oo:,';:::::;;;;;:cc:::c::::cclooooolooddxxdoc;,,;:o0NWMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMMWO;..':dkxl;,,;::;;;;:loodxxxxddddddddoddoolllokkkkdllcl0WMMMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMMWO;...',,cxOOdc;,,,;;;;ldxddxxxxxxxxdodxxddllloddxkOOkkxdONWMMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMMMNx,....''',,cx00ko:;;;;:cdxxxkkxxkkkxddddodoooolodxkO0O0OkONMMMMMMMMMMMMMMMMM
			MMMMMMMMMMMMMMMMWKl'.'''''''',',cxKKkoc:::clddodxxkkkkxxxddddooxdodxkO0KK0OkkXMMMMMMMMMMMMMMMMM
			MMMMMMMMWMMWMMWXx;'..'''''''''',',:xOOdc:;:lddxddxxkxxkxddddoooddddxkOO0K0Ok0NMMMMMMMMMMMMMMMMM
			MMMMMMMMMMMWKxc,..''''''',,,'',,''',:dxdlcclodxxxxxkkkkxoodddddooddxxxxxkOOKWMMMMMMMMMMMMMMMMMM
			MMMMMMMMMNOo;....'''''''''''',,,''''',;;,,,,;:coxxxddxxdooooolccccclodxxxkKWMMMMMMMMMMMMMMMMMMM
			MMMMMMW0d:.....'..''''''',''',,,'',,',,,'.....';cllllllllllc:,,;;;;,cooodOWMMMMMMMMMMMMMMMMMMMM
			MMMN0x:'............'''''',,,,,,,,,,,,,,,'''.......',;;;;,''..',,,;,;;:;;ckNWMMMMMMMMMMMMMMMMMM
			Kko:'............'...''''',,,,,,,,,,,,,,,,,,''.................',;;''''',,;o0WMMMMMMMMMMMMMMMMM
			;..........'.....'''...'',,,,,,,,,,,,,,,,,,,,,,'..',,,'......''',,;,''..',;:cxXWMMMMMMMMMMMMMMM
			'..........''....'''''.'',,,,,,,,'',,,,,,,,',,,,',;coxdc,..''',;;;;:;'...',;::lkKWMMMMMMMMMMMMM
			'''.......'''.''.''''''''''''',,'',,,',,,,,,,,,;,,,,;:cc;''....',,;;;,,'..',;:::cldkKNMMMMMMMMM
			.''.......'',''''.''''';,'''''''',,,,,,,,,,,,,;;;,;,,;;;;;;,'....',;;;;;'''',;::::;;:lxKNMMMMMM
			........'.'',,,,'''...',;,,'',,,,,,,,,,,,,,,,;;;,;;;;;;::;:;;;,'..',;;;::,''',;:::cc:;;:o0NMMMM
			...........',,'''''...''',,,,,',,,,,;;,,,,,,,;;;,,,,,,,;::::;;;;;,'',;;:::;''',,;:ccccc:;:oONWM

		</p>-->
		<script id="script_indekso">
			var right_bar = document.getElementById('right_bar');
			var burgero_div = document.getElementById('burgero_div');
			//var indekso_modal = document.getElementsByClassName('modal_white');
			
				function montri_navindekso() {
					right_bar.style.display = '';
					burgero_div.style.display = 'none';
				}
			
				function malmontri_navindekso() {
					right_bar.style.display = 'none';
					burgero_div.style.display = '';
				}
			
				/*window.onclick = function(select) {
					if (right_bar.style.display == '' && select.target !== document.getElementById('grandeco')) {
						right_bar.style.display = "none";
						burgero_div.style.display = '';
					}
				}*/
			
		</script>
		<script id="script_eraro_sag">

			if((window.navigator.userAgent.indexOf('Android') != -1)
			|| (window.navigator.userAgent.indexOf('iPhone') != -1)
			|| (window.navigator.userAgent.indexOf('iPad') != -1)
			|| (window.navigator.userAgent.indexOf('iPod') != -1)) {
				
				document.getElementById('eraro_sag').style.display = '';
				console.log('saĝtelefone aŭ tabulkomputile');
			} else {
				document.getElementById('eraro_sag').style.display = 'none';
				console.log('komputile');
			}
			
		</script>
		<script id="script_bazlinio">

			var tabelo_alf = document.getElementsByClassName('tabelo_alf');
			var sciante_frazo = document.getElementsByClassName('sciante_frazo');

			function substreki() {
				for (var i = 0; i < tabelo_alf.length; i ++) { tabelo_alf[i].style.textDecoration = 'underline green 1px'; }
				for (var i = 0; i < sciante_frazo.length; i ++) { sciante_frazo[i].style.textDecoration = 'underline green 1px'; }
			}

			function malsubstreki() {
				for (var i = 0; i < tabelo_alf.length; i ++) { tabelo_alf[i].style.textDecoration = ''; }
				for (var i = 0; i < sciante_frazo.length; i ++) { sciante_frazo[i].style.textDecoration = ''; }
			}

		</script>
		<script id="script_sciante">
			var sci_tabelo = document.getElementById('ŝava_alfabeto');
			var sci_tb = document.getElementById('ŝava_alfabeto_tb')
			var sci_h_n1 = document.getElementById('sci_h_n1');
			var sci_h_n3 = document.getElementById('sci_h_n3');
			var sci_h_sxn = document.getElementById('sci_h_sxn');
			var sci_h_sxf = document.getElementById('sci_h_sxf');

			var neeo = document.getElementsByClassName('sci_neeo');

			function sci_montr_cxion() {
				if(document.form_sci.elements.sci_cxio.checked == false) {
					document.form_sci.elements.sci_uniko.checked = false;
					document.form_sci.elements.sci_sxava.checked = false;
				} else {
					document.form_sci.elements.sci_uniko.checked = true;
					document.form_sci.elements.sci_sxava.checked = true;
				}

				sci_h_n3.style.display = 'none';
				for (var i = 0; i < sci_tb.children.length; i ++) { sci_tb.children[i].children[2].style.display = 'none'; }

				sci_montr_unikode();
				sci_montr_sxava();
			}

			function sci_cxio_act() {
				document.form_sci.elements.sci_cxio.indeterminate = false;
				if (document.form_sci.elements.sci_uniko.checked == true && document.form_sci.elements.sci_sxava.checked == true) {
					document.form_sci.elements.sci_cxio.checked = true;
				} else {
					document.form_sci.elements.sci_cxio.indeterminate = true;
				}
			}

			function sci_montr_unikode() {
				if(document.form_sci.elements.sci_uniko.checked == false) {
					document.form_sci.elements.sci_cxio.checked = false;

					document.getElementById('sci_h_U').style.display = 'none';
					for (var i = 0; i < sci_tb.children.length; i ++) { sci_tb.children[i].children[3].style.display = 'none'; }

				} else {
					document.getElementById('sci_h_U').style.display = '';
					for (var i = 0; i < sci_tb.children.length; i ++) { sci_tb.children[i].children[3].style.display = ''; }
				}

				sci_cxio_act();
			}

			function sci_montr_sxava () {
				if(document.form_sci.elements.sci_sxava.checked == false) {

					document.form_sci.elements.sci_cxio.checked = false;

					sci_h_n1.style.display = 'none';
					sci_h_sxn.style.display = 'none';
					sci_h_sxf.style.display = 'none';

					for (var i = 0; i < neeo.length; i ++) { neeo[i].style.display = 'none'; }
					for (var i = 0; i < sci_tb.children.length; i ++) { sci_tb.children[i].children[0].style.display = 'none'; } //nsxava
					for (var i = 0; i < sci_tb.children.length; i ++) { sci_tb.children[i].children[4].style.display = 'none'; } //sxanom
					for (var i = 0; i < sci_tb.children.length; i ++) { sci_tb.children[i].children[5].style.display = 'none'; } //sxafon
					
					sci_h_n2.style.borderStyle = 'solid solid solid solid';
					sci_h_n2.style.borderTopLeftRadius = '6px';
					for (var i = 0; i < sci_tb.children.length; i ++) { sci_tb.children[i].children[1].style.borderLeft = 'solid 1px'; } //nstarl_bord



				} else {
					sci_h_n1.style.display = '';
					sci_h_sxn.style.display = '';
					sci_h_sxf.style.display = '';

					for (var i = 0; i < neeo.length; i ++) { neeo[i].style.display = ''; }
					for (var i = 0; i < sci_tb.children.length; i ++) { sci_tb.children[i].children[0].style.display = ''; } //nsxava
					for (var i = 0; i < sci_tb.children.length; i ++) { sci_tb.children[i].children[4].style.display = ''; } //sxanom
					for (var i = 0; i < sci_tb.children.length; i ++) { sci_tb.children[i].children[5].style.display = ''; } //sxafon

					sci_h_n2.style.borderStyle = 'solid solid solid none';
					sci_h_n2.style.borderTopLeftRadius = '0px';
					for (var i = 0; i < sci_tb.children.length; i ++) { sci_tb.children[i].children[1].style.borderLeft = ''; } //nstarl_bord
				}

				sci_cxio_act();
			}

			function ordigi_sxa() {
				var rows, switching, i, x, y, shouldSwitch;
				switching = true;
				
				while (switching) {
					switching = false;
					rows = sci_tabelo.rows;
					
					for (i = 1; i < (rows.length - 1); i++) {
						shouldSwitch = false;
						x = rows[i].getElementsByTagName("TD")[0];
						y = rows[i + 1].getElementsByTagName("TD")[0];

						if (Number(x.innerHTML) > Number(y.innerHTML)) {
							shouldSwitch = true;
							break;
						}
					}
				
					if (shouldSwitch) {
			    		rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
			    		switching = true;
					}
				}
				console.log('sxava');
			}

			function ordigi_star() {
				
				var table, rows, switching, i, x, y, shouldSwitch;
				table = document.getElementById("myTable");
				switching = true;
						
				while (switching) {
					switching = false;
					rows = sci_tabelo.rows;
					
					for (i = 1; i < (rows.length - 1); i++) {
						shouldSwitch = false;
						x = rows[i].getElementsByTagName("TD")[2];
						y = rows[i + 1].getElementsByTagName("TD")[2];

						if (Number(x.innerHTML) > Number(y.innerHTML)) {
							shouldSwitch = true;
							break;
						}
					}
				
					if (shouldSwitch) {
						rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
						switching = true;
					}
				}
			}

		</script>
		<script id="script_svg">
			// origina lingvo de la klavaro
			var en_US = document.getElementsByClassName('EN');
			var es_ES = document.getElementsByClassName('ES');
			var es_LA = document.getElementsByClassName('LA');
			var fr_FR = document.getElementsByClassName('FR');
			var de_DE = document.getElementsByClassName('DE');
			
			// tipoj de skribsigno
			var elektita_vidklavarfasono = document.getElementById('elektita_vidklavarfasono');
			var simb = document.getElementsByClassName('simb');
			var altgr = document.getElementsByClassName('altgr');
			var num = document.getElementsByClassName('num');
			var QWERTY = document.getElementsByClassName('QWERTY'); //poner todas las letras en QWERTY, excepto las que varíen en idioma.
			//var DVORAK = document.getElementsByClassName('DVORAK');
			var ANSI = document.getElementsByClassName('ANSI');
			var ISO = document.getElementsByClassName('ISO');

			// opcioj
			var opcio_11_sxa = document.getElementById('opcio_11_sxa');
			var opcio_22_lat = document.getElementById('opcio_22_lat');
			var opcio_33 = document.getElementById('opcio_33');
			var butono_22 = document.getElementById('butono_22');
			var butono_33 = document.getElementById('butono_33');
			var gr = document.getElementsByClassName('gr');
			var aliaj = document.getElementsByClassName('aliaj');
			var checkbox_montrigrek_33 = document.getElementById('checkbox_montrigrek_33');
			var radio_montrigrek_22 = document.vidklavaro_form.elements.radio_montrigrek_22_lat;
			var last_22 = 'sxa';

			// simboloj montrataj
			var neorigina = document.getElementsByClassName('neorigina');
			var figuroj_group_11 = document.getElementsByClassName('figuroj_group_11');
			var figuroj_group_12 = document.getElementsByClassName('figuroj_group_12');
			var figuroj_group_22 = document.getElementsByClassName('figuroj_group_22');
			var figuroj_group_33 = document.getElementsByClassName('figuroj_group_33');
			var simboloj_11 = document.getElementsByClassName('simboloj_11');
			var simboloj_22 = document.getElementsByClassName('simboloj_22');
			var simboloj_33 = document.getElementsByClassName('simboloj_33');

			elektita_vidklavarfasono.addEventListener("change", vidklavaro_e); // kontroli ĉu la formularo estas ŝanĝita			

			function vidklavaro_e () { // [mal]-montri skribsignojn depende de la lingvo de la klavaro
				
				// [mal]-montri ANSI-ajn aŭ ISO-ajn skribsignojn
				if(elektita_vidklavarfasono.value == 'literoj' || elektita_vidklavarfasono.value == 'en_US' || elektita_vidklavarfasono.value == 'DVORAK') {
					for (var i = 0; i < ISO.length; i ++) { ISO[i].style.display = 'none'; }
					for (var i = 0; i < ANSI.length; i ++) { ANSI[i].style.display = ''; }
				} else {
					for (var i = 0; i < ISO.length; i ++) { ISO[i].style.display = ''; }
					for (var i = 0; i < ANSI.length; i ++) { ANSI[i].style.display = 'none'; }
				}

				// malmontri ĉiujn literojn
				for (var i = 0; i < neorigina.length; i ++) { neorigina[i].style.display = 'none'; } //malmontras literoj ŝanĝitaj el la origina QWERTY-o
				
				document.getElementById('Key_A_Original').style.display='';
				document.getElementById('Key_Q_Original').style.display='';
				document.getElementById('Key_Z_Original').style.display='';
				document.getElementById('Key_W_Original').style.display='';
				document.getElementById('Key_M_Original').style.display='';
				document.getElementById('Key_Y_Original').style.display='';
				
				for (var i = 0; i < en_US.length; i ++) { en_US[i].style.display = 'none'; }
				for (var i = 0; i < es_ES.length; i ++) { es_ES[i].style.display = 'none'; }
				for (var i = 0; i < es_LA.length; i ++) { es_LA[i].style.display = 'none'; }
				for (var i = 0; i < fr_FR.length; i ++) { fr_FR[i].style.display = 'none'; }
				for (var i = 0; i < de_DE.length; i ++) { de_DE[i].style.display = 'none'; }

				// malmontri simbolojn kaj numerojn se "nur literoj" elektitas.
				if(elektita_vidklavarfasono.value == 'literoj' || elektita_vidklavarfasono.value == 'fr_FR') {
					for (var i = 0; i < simb.length; i ++) { simb[i].style.display = 'none'; }
					for (var i = 0; i < altgr.length; i ++) { altgr[i].style.display = 'none'; }
					for (var i = 0; i < num.length; i ++) { num[i].style.display = 'none'; }	
				} else {
					for (var i = 0; i < num.length; i ++) { num[i].style.display = ''; }
				}

				// montri nur skribsignojn elektitajn
				if(elektita_vidklavarfasono.value == 'en_US') {
					for (var i = 0; i < en_US.length; i ++) { en_US[i].style.display = ''; }
				} else if(elektita_vidklavarfasono.value == 'es_ES') {
					for (var i = 0; i < es_ES.length; i ++) { es_ES[i].style.display = ''; }
				} else if(elektita_vidklavarfasono.value == 'fr_FR') {
					for (var i = 0; i < fr_FR.length; i ++) { fr_FR[i].style.display = ''; }
					document.getElementById('Key_A_Original').style.display='none';
					document.getElementById('Key_Q_Original').style.display='none';
					document.getElementById('Key_Z_Original').style.display='none';
					document.getElementById('Key_W_Original').style.display='none';
					document.getElementById('Key_M_Original').style.display='none';
				} else if(elektita_vidklavarfasono.value == 'de_DE') {
					for (var i = 0; i < de_DE.length; i ++) { de_DE[i].style.display = ''; }
					document.getElementById('Key_Z_Original').style.display='none';
					document.getElementById('Key_Y_Original').style.display='none';
				} else if(elektita_vidklavarfasono.value == 'es_LA') {
					for (var i = 0; i < es_LA.length; i ++) { es_LA[i].style.display = ''; }
				}
				else if(elektita_vidklavarfasono.value == 'dvorak') {
					for (var i = 0; i < dvorak.length; i ++) { dvorak[i].style.display = ''; }
				}
				
			}
			
			
			function montri_33() {
				if (butono_22.className.match(/(?:^|\s)butono_elektita(?!\S)/)) { //check if that class is assigned
					butono_22.className = butono_22.className.replace( /(?:^|\s)butono_elektita(?!\S)/g , '' ); //this delete that class
					butono_33.className += " butono_elektita";
					butono_22_sxa.className = 'butono_verda butono_maleblita'
					butono_22_lat.className = 'butono_verda butono_maleblita'
				}

				for (var i = 0; i < figuroj_group_11.length; i ++) { figuroj_group_11[i].style.display = 'none'; }
				for (var i = 0; i < simboloj_11.length; i ++) { simboloj_11[i].style.display = 'none'; }
				for (var i = 0; i < figuroj_group_22.length; i ++) { figuroj_group_22[i].style.display = 'none'; }
				for (var i = 0; i < simboloj_22.length; i ++) { simboloj_22[i].style.display = 'none'; }
				for (var i = 0; i < figuroj_group_33.length; i ++) { figuroj_group_33[i].style.display = ''; }
				for (var i = 0; i < simboloj_33.length; i ++) { simboloj_33[i].style.display = ''; }
				for (var i = 0; i < aliaj.length; i ++) { aliaj[i].style.display = ''; } // it always shows aliaĵojs with 3x3 activated

				opcio_11_sxa.style.display = 'none';
				opcio_22_lat.style.display = 'none';
				opcio_33.style.display = '';
				montri_grek33();
			}


			function montri_22() {
				if (butono_33.className.match(/(?:^|\s)butono_elektita(?!\S)/)) { //check if that class is assigned
					butono_33.className = butono_33.className.replace( /(?:^|\s)butono_elektita(?!\S)/g , '' ); //this delete that class
					butono_22.className += " butono_elektita";
					butono_22_sxa.className = butono_22_sxa.className.replace( /(?:^|\s)butono_maleblita(?!\S)/g , '' );
					butono_22_lat.className = butono_22_lat.className.replace( /(?:^|\s)butono_maleblita(?!\S)/g , '' );

					if (last_22 == 'sxa') {
						butono_22_sxa.className += " butono_elektita";
						montri_22_sxa();
					} else {
						butono_22_lat.className += " butono_elektita";
						montri_22_lat();
					}
				}

				for (var i = 0; i < figuroj_group_33.length; i ++) { figuroj_group_33[i].style.display = 'none'; }
				for (var i = 0; i < simboloj_33.length; i ++) { simboloj_33[i].style.display = 'none'; }
				
				opcio_33.style.display = 'none';
			}


			function montri_22_sxa() {
				if(butono_22.className.match(/(?:^|\s)butono_elektita(?!\S)/)) {

					if (butono_22_lat.className.match(/(?:^|\s)butono_elektita(?!\S)/)) { //check if that class is assigned
					butono_22_lat.className = butono_22_lat.className.replace( /(?:^|\s)butono_elektita(?!\S)/g , '' );
					butono_22_sxa.className += " butono_elektita";
					}

				for (var i = 0; i < figuroj_group_11.length; i ++) { figuroj_group_11[i].style.display = ''; }
				for (var i = 0; i < simboloj_11.length; i ++) { simboloj_11[i].style.display = ''; }
				for (var i = 0; i < figuroj_group_22.length; i ++) { figuroj_group_22[i].style.display = 'none'; }
				for (var i = 0; i < simboloj_22.length; i ++) { simboloj_22[i].style.display = 'none'; }
				for (var i = 0; i < aliaj.length; i ++) { aliaj[i].style.display = ''; } // it always shows aliaĵojs with sxa activated

				opcio_22_lat.style.display = 'none';
				opcio_11_sxa.style.display = '';
				last_22 = 'sxa';

				}
			}
			

			function montri_22_lat() {

				if(butono_22.className.match(/(?:^|\s)butono_elektita(?!\S)/)) {
					if (butono_22_sxa.className.match(/(?:^|\s)butono_elektita(?!\S)/)) { //check if that class is assigned
					butono_22_sxa.className = butono_22_lat.className.replace( /(?:^|\s)butono_elektita(?!\S)/g , '' );
					butono_22_lat.className += " butono_elektita";
				}

				for (var i = 0; i < figuroj_group_11.length; i ++) { figuroj_group_11[i].style.display = 'none'; }
				for (var i = 0; i < simboloj_11.length; i ++) { simboloj_11[i].style.display = 'none'; }
				for (var i = 0; i < figuroj_group_22.length; i ++) { figuroj_group_22[i].style.display = ''; }
				for (var i = 0; i < simboloj_22.length; i ++) { simboloj_22[i].style.display = ''; }

				opcio_11_sxa.style.display = 'none';
				opcio_22_lat.style.display = '';
				last_22 = 'lat';
				montri_grek22();
				}
			}


			function montri_grek33() {
				if(butono_33.className.match(/(?:^|\s)butono_elektita(?!\S)/) && checkbox_montrigrek_33.checked == true) {
					for (var i = 0; i < gr.length; i ++) { gr[i].style.display = ''; }
				} else if((butono_33.className.match(/(?:^|\s)butono_elektita(?!\S)/) && checkbox_montrigrek_33.checked == false)) {
					for (var i = 0; i < gr.length; i ++) { gr[i].style.display = 'none'; }
				}
			}


			function montri_grek22() {
				if(butono_22.className.match(/(?:^|\s)butono_elektita(?!\S)/) && radio_montrigrek_22.value == 'greka') {
					for (var i = 0; i < gr.length; i ++) { gr[i].style.display = ''; }
					for (var i = 0; i < aliaj.length; i ++) { aliaj[i].style.display = 'none'; }
				} else if (butono_22.className.match(/(?:^|\s)butono_elektita(?!\S)/) && radio_montrigrek_22.value == 'alia') {
					for (var i = 0; i < gr.length; i ++) { gr[i].style.display = 'none'; }
					for (var i = 0; i < aliaj.length; i ++) { aliaj[i].style.display = ''; }
				}
			}

 		</script>
		<script id="script_sag">

			var butono_sag_sxa		= document.getElementById('butono_sag_sxa');
			var butono_sag_latmin	= document.getElementById('butono_sag_latmin');
			var butono_sag_gremin	= document.getElementById('butono_sag_gremin');
			var butono_sag_simbo1	= document.getElementById('butono_sag_simbo1');
			var butono_sag_latmaj	= document.getElementById('butono_sag_latmaj');
			var butono_sag_gremaj	= document.getElementById('butono_sag_gremaj');
			var butono_sag_simbo2	= document.getElementById('butono_sag_simbo2');

			var sag_img_sxa			= document.getElementById('sag_img_sxa');
			var sag_img_latmin		= document.getElementById('sag_img_latmin');
			var sag_img_latmaj		= document.getElementById('sag_img_latmaj');
			var sag_img_gremin		= document.getElementById('sag_img_gremin');
			var sag_img_gremaj		= document.getElementById('sag_img_gremaj');
			var sag_img_simbo1		= document.getElementById('sag_img_simbo1');
			var sag_img_simbo2		= document.getElementById('sag_img_simbo2');

			function malmontri_sag() {
				for (var i = 1; i < 8; i ++) { document.getElementById('sag_kvadrato').children[i].style.display = 'none'; }
			}

			function sag_butono_malebli() {
				butono_sag_sxa.className = "butono_verda";
				butono_sag_latmin.className = "butono_verda";
				butono_sag_gremin.className = "butono_verda";
				butono_sag_simbo1.className = "butono_verda";
				butono_sag_latmaj.className = "butono_verda";
				butono_sag_gremaj.className = "butono_verda";
				butono_sag_simbo2.className = "butono_verda";
			}

			function montri_sag_sxa() {
				sag_butono_malebli();
				butono_sag_sxa.className += " butono_elektita";			
				malmontri_sag();
				sag_img_sxa.style.display = '';
			}

			function montri_sag_latmin() {
				sag_butono_malebli();
				butono_sag_latmin.className += " butono_elektita";			
				malmontri_sag();
				sag_img_latmin.style.display = '';
			}

			function montri_sag_latmaj() {
				sag_butono_malebli();
				butono_sag_latmaj.className += " butono_elektita";			
				malmontri_sag();
				sag_img_latmaj.style.display = '';
			}

			function montri_sag_gremin() {
				sag_butono_malebli();
				butono_sag_gremin.className += " butono_elektita";			
				malmontri_sag();
				sag_img_gremin.style.display = '';
			}

			function montri_sag_gremaj() {
				sag_butono_malebli();
				butono_sag_gremaj.className += " butono_elektita";			
				malmontri_sag();
				sag_img_gremaj.style.display = '';
			}


			function montri_sag_simbo1() {
				sag_butono_malebli();
				butono_sag_simbo1.className += " butono_elektita";			
				malmontri_sag();
				sag_img_simbo1.style.display = '';
			}

			function montri_sag_simbo2() {
				sag_butono_malebli();
				butono_sag_simbo2.className += " butono_elektita";			
				malmontri_sag();
				sag_img_simbo2.style.display = '';
			}
		</script>

		<script id="script_ret">
			var butono_ret_sxa = document.getElementById('butono_ret_sxa');
			var butono_ret_sxaalt = document.getElementById('butono_ret_sxaalt');
			var butono_ret_latmin = document.getElementById('butono_ret_latmin');
			var butono_ret_latmaj = document.getElementById('butono_ret_latmaj');
			var butono_ret_latminalt = document.getElementById('butono_ret_latminalt');
			var butono_ret_latmajalt = document.getElementById('butono_ret_latmajalt');

			var ret_img_sxa = document.getElementById('ret_img_sxa');
			var ret_img_sxaalt = document.getElementById('ret_img_sxaalt');
			var ret_img_latmin = document.getElementById('ret_img_latmin');
			var ret_img_latmaj = document.getElementById('ret_img_latmaj');
			var ret_img_latminalt = document.getElementById('ret_img_latminalt');
			var ret_img_latmajalt = document.getElementById('ret_img_latmajalt');
			

			function malmontri_ret() {
				ret_img_sxa.style.display = 'none';
				ret_img_sxaalt.style.display = 'none';
				ret_img_latmin.style.display = 'none';
				ret_img_latmaj.style.display = 'none';
				ret_img_latminalt.style.display = 'none';
				ret_img_latmajalt.style.display = 'none';
			}

			function ret_butono_malebli() {
				butono_ret_sxa.className = "butono_verda";
				butono_ret_sxaalt.className = "butono_verda";
				butono_ret_latmin.className = "butono_verda";
				butono_ret_latmaj.className = "butono_verda";
				butono_ret_latminalt.className = "butono_verda";
				butono_ret_latmajalt.className = "butono_verda";
			}

			function montri_ret_sxa() {
				ret_butono_malebli();
				butono_ret_sxa.className += " butono_elektita";			
				malmontri_ret();
				ret_img_sxa.style.display = '';
			}

			function montri_ret_sxaalt() {
				ret_butono_malebli();
				butono_ret_sxaalt.className += " butono_elektita";
				malmontri_ret();
				ret_img_sxaalt.style.display = '';
			}

			function montri_ret_latmin() {
				ret_butono_malebli();
				butono_ret_latmin.className += " butono_elektita";
				malmontri_ret();
				ret_img_latmin.style.display = '';
			}

			function montri_ret_latmaj() {
				ret_butono_malebli();
				butono_ret_latmaj.className += " butono_elektita";
				malmontri_ret();
				ret_img_latmaj.style.display = '';
			}

			function montri_ret_latminalt() {
				ret_butono_malebli();
				butono_ret_latminalt.className += " butono_elektita";
				malmontri_ret();
				ret_img_latminalt.style.display = '';
			}

			function montri_ret_latmajalt() {
				ret_butono_malebli();
				butono_ret_latmajalt.className += " butono_elektita";
				malmontri_ret();
				ret_img_latmajalt.style.display = '';
			}


		</script>
	</body>
</html>