<?php
    // Стоимость бассейна с коэффициентом на строительство (Шаг 1)
    switch ($step1 = $_REQUEST['step1']) {
        case "Дом":
            $step1_sum = 0.1;
            break;
        case "Дача":
            $step1_sum = 0;
            break;
        case "Квартира":
            $step1_sum = 0.1;
            break;
        case "Другое":
            $step1_sum = 0.2;
            break;
    }

    // Стоимость бассейна с коэффициентом на строительство (Шаг 1)
    switch ($step2 = $_REQUEST['step2']) {
        case "Скимерный":
            $step2_sum = 0;
            break;
        case "Переливной":
            $step2_sum = 0;
            break;
        case "Полипропиленновый":
            $step2_sum = 0;
            break;
        case "Композитный":
            $step2_sum = 0;
            break;
        case "SPA ванна":
            $step2_sum = 0;
            break;
    }

    // Размер квадратных метров (Шаг 3)
    switch ($step3 = $_REQUEST['step3']) {
        case "1_6":
            $step3_sum = 350000;
            break;
        case "1_10":
            $step3_sum = 500000;
            break;
        case "1_18":
            $step3_sum = 650000;
            break;
        case "1_21":
            $step3_sum = 750000;
            break;
        case "1_40":
            $step3_sum = 850000;
            break;
        case "2_18":
            $step3_sum = 750000;
            break;
        case "2_21":
            $step3_sum = 850000;
            break;
        case "2_40":
            $step3_sum = 950000;
            break;
        case "2_48":
            $step3_sum = 1100000;
            break;
        case "3_6":
            $step3_sum = 250000;
            break;
        case "3_10":
            $step3_sum = 290000;
            break;
        case "3_12":
            $step3_sum = 350000;
            break;
        case "3_15":
            $step3_sum = 420000;
            break;
        case "4_7":
            $step3_sum = 420000;
            break;
        case "4_10":
            $step3_sum = 465000;
            break;
        case "4_12":
            $step3_sum = 550000;
            break;
        case "4_18":
            $step3_sum = 640000;
            break;
        case "4_24":
            $step3_sum = 810000;
            break;
        case "4_47":
            $step3_sum = 1450000;
            break;
        case "5_2":
            $step3_sum = 350000;
            break;
        case "5_3":
            $step3_sum = 400000;
            break;
        case "5_4":
            $step3_sum = 500000;
            break;
        case "5_6":
            $step3_sum = 600000;
            break;
    }

    // Дополнительные опции)
    $step4 = $_REQUEST["step4"];
    if (!isset($step4)) {
        $step4_sum = 0;
    } else {
        $step4_sum = array_sum($step4);
    }


    if (!isset($step1_sum)) {
        echo "Вы не указали, где нужно поставить бассейн (Шаг 1)";
    }
    elseif (!isset($step2_sum)) {
        echo "Вы не указали, какой тип бассейна нужно установить (Шаг 2)";
    }
    elseif (!isset($step3_sum)) {
        echo "Вы не выбрали размер бассейна (Шаг 3)";
    }
    else {
        $sum = (($step1_sum * $step3_sum) + $step3_sum);
        $sum_dop = $sum + $step4_sum;
        echo "Стоимость бассейна: ".$sum." руб.<br>";
        echo "Стоимость допов: ".$step4_sum." руб.<br>";
        echo "Итого: ".$sum_dop." руб.";
    }



