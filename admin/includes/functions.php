<?php

        date_default_timezone_set("Europe/Lisbon");

        function data_de_hoje()
        {         
            $agora = getdate();
            
            $dias_semana_pt = [
                "Domingo",
                "2ª Feira",
                "3ª Feira",
                "4ª Feira",
                "5ª Feira",
                "6ª Feira",
                "Sábado"
            ];

            $meses_pt = [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
            ];

            $dia_da_semana = $dias_semana_pt[$agora["wday"]];
            $dia_do_mes = $agora["mday"];
            $mes = $meses_pt[$agora["mon"] - 1];
            $ano = $agora["year"];

            $data = "Hoje é {$dia_da_semana}, $dia_do_mes de {$mes}, {$ano}. ";

            return $data;
        }

        function hora_atual()
        {
            $agora = getdate();

            $hora = $agora["hours"];
            $minuto = $agora["minutes"];

            $horas = "São $hora horas e $minuto minutos. ";
            return $horas;
        }

        function comprimento()
        {
            $hora = date("H");

            if ($hora < 5)
                return "Boa noite";
            else if ($hora < 12)
                return "Bom dia";
            else if ($hora < 20)
                return "Boa tarde";
            else
                return "Boa noite";
        }