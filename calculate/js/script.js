function clickStep1(stayType) {
	var step1_1 = document.getElementById("step2-dom");
	var step1_2 = document.getElementById("step2-dacha");
	var step1_3 = document.getElementById("step2-kvartira");
	var step1_4 = document.getElementById("step2-drugoe");
		
	if (stayType === 'Дом') {
        step1_1.className='vis1'; // Дом видим
        step1_2.className='vis0'; // Дача не видим
        step1_3.className='vis0'; // Квартира не видим
        step1_4.className='vis0'; // Другое не видим
	}
		
	if (stayType === 'Дача') {
        step1_1.className='vis0'; // Дом не видим
        step1_2.className='vis1'; // Дача видим
        step1_3.className='vis0'; // Квартира не видим
        step1_4.className='vis0'; // Другое не видим
	}
		
	if (stayType === 'Квартира') {
        step1_1.className='vis0'; // Дом не видим
        step1_2.className='vis0'; // Дача не видим
        step1_3.className='vis1'; // Квартира видим
        step1_4.className='vis0'; // Другое не видим
	}
		
	if (stayType === 'Другое') {
        step1_1.className='vis0'; // Дом не видим
        step1_2.className='vis0'; // Дача не видим
        step1_3.className='vis0'; // Квартира не видим
        step1_4.className='vis1'; // Другое видим

        step2_1.className='vis0'; // Cкимер не видим
        step2_2.className='vis0'; // Переливной не видим
        step2_3.className='vis0'; // Полипропилен не видим
        step2_4.className='vis0'; // Композит не видим
        step2_5.className='vis0'; // СПА не видим
        step3_1.className='vis0'; // Допы не видим
        step3_2.className='vis0'; // Допы не видим
	}
}

function clickStep2(stayType) {
    var step2_1 = document.getElementById("step3-skimer");
    var step2_2 = document.getElementById("step3-perelivnoy");
    var step2_3 = document.getElementById("step3-polipropilen");
    var step2_4 = document.getElementById("step3-kompozit");
    var step2_5 = document.getElementById("step3-spa");
    var step3_1 = document.getElementById("step4-1");
    var step3_2 = document.getElementById("step4-2");

    if (stayType === 'Скимерный') {
        step2_1.className='vis1'; // Cкимер видим
        step2_2.className='vis0'; // Переливной не видим
        step2_3.className='vis0'; // Полипропилен не видим
        step2_4.className='vis0'; // Композит не видим
        step2_5.className='vis0'; // СПА не видим
    }

    if (stayType === 'Переливной') {
        step2_1.className='vis0'; // Cкимер не видим
        step2_2.className='vis1'; // Переливной видим
        step2_3.className='vis0'; // Полипропилен не видим
        step2_4.className='vis0'; // Композит не видим
        step2_5.className='vis0'; // СПА не видим
    }

    if (stayType === 'Полипропиленновый') {
        step2_1.className='vis0'; // Cкимер не видим
        step2_2.className='vis0'; // Переливной не видим
        step2_3.className='vis1'; // Полипропилен видим
        step2_4.className='vis0'; // Композит не видим
        step2_5.className='vis0'; // СПА не видим
    }

    if (stayType === 'Композитный') {
        step2_1.className='vis0'; // Cкимер не видим
        step2_2.className='vis0'; // Переливной не видим
        step2_3.className='vis0'; // Полипропилен не видим
        step2_4.className='vis1'; // Композит видим
        step2_5.className='vis0'; // СПА не видим
    }

    if (stayType === 'SPA ванна') {
        step2_1.className='vis0'; // Cкимер не видим
        step2_2.className='vis0'; // Переливной не видим
        step2_3.className='vis0'; // Полипропилен не видим
        step2_4.className='vis0'; // Композит не видим
        step2_5.className='vis1'; // СПА видим
    }

    if (stayType === 'Скимерный' || stayType === 'Переливной' || stayType === 'Полипропиленновый' || stayType === 'Композитный') {
        step3_1.className='vis1'; // Cкимер видим
        step3_2.className='vis0'; // Переливной не видим
    }

    if (stayType === 'SPA ванна') {
        step3_1.className='vis0'; // Cкимер не видим
        step3_2.className='vis1'; // Переливной видим
    }
}