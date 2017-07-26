<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Модель вычисления</title>
    <link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
</head>
<body>
    <form action="javascript:void(null);" method="post" id="formx" onsubmit="call()">
        <p>1. Где хотите поставить бассейн:</p>
        <label>
            <input type="radio" name="step1" value="Дом" onclick="clickStep1(this.value);">Дом<br>
            <input type="radio" name="step1" value="Дача" onclick="clickStep1(this.value);">Дача<br>
            <input type="radio" name="step1" value="Квартира" onclick="clickStep1(this.value);">Квартира<br>
            <input type="radio" name="step1" value="Другое" onclick="clickStep1(this.value);">Другое<br><br>
        </label>
        <p>2. Выберите бассейн:</p>
		<div id="step2-dom">
			<label>
                <input type="radio" name="step2" value="Скимерный" onclick="clickStep2(this.value);">Скимерный<br>
			    <input type="radio" name="step2" value="Переливной" onclick="clickStep2(this.value);">Переливной<br>
			    <input type="radio" name="step2" value="Полипропиленновый" onclick="clickStep2(this.value);">Полипропиленновый<br>
			    <input type="radio" name="step2" value="Композитный" onclick="clickStep2(this.value);">Композитный<br>
			    <input type="radio" name="step2" value="SPA ванна" onclick="clickStep2(this.value);">SPA ванна<br><br>
            </label>
        </div>
		<div class="hidden" id="step2-dacha">
			<label>
                <input type="radio" name="step2" value="Полипропиленновый" onclick="clickStep2(this.value);">Полипропиленновый<br><br>
            </label>
        </div>
		<div class="hidden" id="step2-kvartira">
			<label>
                <input type="radio" name="step2" value="SPA ванна" onclick="clickStep2(this.value);">SPA ванна<br><br>
            </label>
        </div>
		<div class="hidden" id="step2-drugoe">
            <label>
                <input type="radio" name="step2" value="Скимерный" onclick="clickStep2(this.value);">Скимерный<br>
			    <input type="radio" name="step2" value="Переливной" onclick="clickStep2(this.value);">Переливной<br>
			    <input type="radio" name="step2" value="Полипропиленновый" onclick="clickStep2(this.value);">Полипропиленновый<br>
			    <input type="radio" name="step2" value="Композитный" onclick="clickStep2(this.value);">Композитный<br>
			    <input type="radio" name="step2" value="SPA ванна" onclick="clickStep2(this.value);">SPA ванна<br><br>
            </label>
        </div>

		<p>3. Выберите размер бассейна (кв.м.):</p>
		<div class="hidden" id="step3-skimer">
            <label>
				<input type="radio" name="step3" value="1_6">6 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="1_10">10 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="1_18">18 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="1_21">21 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="1_40">40 м<sup>2</sup><br><br>
            </label>
        </div>
		<div class="hidden" id="step3-perelivnoy">
            <label>
                <input type="radio" name="step3" value="2_18">18 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="2_21">21 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="2_40">40 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="2_48">48 м<sup>2</sup><br><br>
            </label>
        </div>
		<div class="hidden" id="step3-polipropilen">
            <label>
                <input type="radio" name="step3" value="3_6">6 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="3_10">10 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="3_12">12.5 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="3_15">15 м<sup>2</sup><br><br>
            </label>
        </div>
		<div class="hidden" id="step3-kompozit">
		    <label>
				<input type="radio" name="step3" value="4_7">7.7 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="4_10">10.4 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="4_12">11.96 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="4_18">18.3 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="4_24">24.5 м<sup>2</sup><br>
			    <input type="radio" name="step3" value="4_47">47.73 м<sup>2</sup><br><br>
            </label>
        </div>
		<div class="hidden" id="step3-spa">
            <label>
			    <input type="radio" name="step3" value="5_2">2 местный<br>
			    <input type="radio" name="step3" value="5_3">3 местный<br>
			    <input type="radio" name="step3" value="5_4">4 местный<br>
                <input type="radio" name="step3" value="5_6">6 местный<br><br>
            </label>
        </div>
		
        <p>4. Дополнительные опции:</p>
		<div class="hidden" id="step4-1">
            <label>
			    <input type="checkbox" name="step4[]" value="85000">Противоток 85 000 руб.<br>
			    <input type="checkbox" name="step4[]" value="80000">Водопад (кобра) 80 000 руб.<br>
			    <input type="checkbox" name="step4[]" value="100000">Аэромассажное плато 100 000 руб.<br>
			    <input type="checkbox" name="step4[]" value="50000">Гидромассаж 50 000 руб.<br>
			    <input type="checkbox" name="step4[]" value="10000">Освещение прожекторов 10 000 руб.<br>
			    <input type="checkbox" name="step4[]" value="75000">Горки водные 75 000 руб.<br>
			    <input type="checkbox" name="step4[]" value="95000">Осушитель воздуха 95 000 руб.<br>
			    <input type="checkbox" name="step4[]" value="60000">Станция дозации 60 000 руб.<br>
			    <input type="checkbox" name="step4[]" value="50000">Плавающее защитное покрытие 50 000 руб.<br>
			    <input type="checkbox" name="step4[]" value="250000">Автоматическое защитное покрытие 250 000 руб.<br>
			    <input type="checkbox" name="step4[]" value="350000">Раздвижной защитный павильон 350 000 руб.<br>
			    <input type="checkbox" name="step4[]" value="12000">Лестница нержавеющая 12 000 руб.<br>
			    <input type="checkbox" name="step4[]" value="30000">Лестница римская (монолитная) 30 000 руб.<br>
            </label>
		</div>
		<div class="hidden" id="step4-2">
			<p>Для спа-ванн дополнительных опций нет</p>
		</div>
        <input type="submit" id="btn" value="Отправить">
    </form>
    <br>
    <div id="results">Выберите тип бассейна и размер</div>
</body>
</html>