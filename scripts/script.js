/**
 * 이 파일은 iModule selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * selfdiagnosis 모듈의 컨텍스트에서 사용할 자바스크립트
 * 이 자바스크립트 파일은 ModuleSelfdiagnosis.class.php 의 getContext() 함수내에 호출하도록 정의되어 있다.
 * 다른 모듈에서 호출되는 자바스크립트와 충돌을 피하기 위해 모듈명으로 선언된 자바스크립트 클래스를 사용한다.
 * @see /modules/selfdiagnosis/ModuleSelfdiagnosis.class.php
 * 
 * @file /modules/selfdiagnosis/scripts/script.js
 * @author Eunseop Lim
 * @license MIT License
 * @version 0.0.1
 * @modified 2018. 7. 23.
 */
var Selfdiagnosis = {
	contextText:null,
	$context:null,
	inputLength:0,
	init: function(contextText) {
		Selfdiagnosis.contextText = contextText;
		Selfdiagnosis.$context = $("#ModuleSelfdiagnosisDiagnoseContext");

		Selfdiagnosis.inputLength = $("table.selection-screen tr", Selfdiagnosis.$context).length - 1;
		$(".action-button", Selfdiagnosis.$context).on("click", Selfdiagnosis.buttonClickHandler);
	},

	buttonClickHandler: function(e) {
		var success = null;

		switch(Selfdiagnosis.contextText) {
			case "우울": success = Selfdiagnosis.diagnoseFourCase(11, 21, 31); break;
			case "불안": success = Selfdiagnosis.diagnoseFourCase(10, 20, 30); break;
			case "사회불안": success = Selfdiagnosis.diagnoseFourCase(36, 71, 88); break;
			case "발표불안": success = Selfdiagnosis.diagnoseFourCase(38, 85, 98); break;
			case "고독감": success = Selfdiagnosis.diagnoseFourCase(9, 17, 26); break;
			case "분노": success = Selfdiagnosis.diagnoseFourCase(16, 26, 29); break;
			case "인정욕구": success = Selfdiagnosis.diagnoseThreeCase(26, 41); break;
			case "진로정체감": success = Selfdiagnosis.diagnoseThreeCase(21, 44); break;
			case "인터넷중독": success = Selfdiagnosis.diagnoseThreeCase(10, 16); break;
			case "사랑유형": success = Selfdiagnosis.lovingType(); break;
			default: console.error("없는 컨텍스트 입니다."); break;
		}

		if (success == true) {
			$.send(ENV.getProcessUrl("selfdiagnosis", "log"), {subject:Selfdiagnosis.contextText});
		}
		return false;
	},

	isValid: function() {
		for (var i = 1; i <= Selfdiagnosis.inputLength; i++)
		{
			if ($("input[name=q"+i+"]:radio:checked", Selfdiagnosis.$context).length == 0 ) {
				alert(i+'번 문항을 체크해주세요.');
				return false;
			}
		}
		return true;
	},

	diagnoseFourCase: function(diagnosis2, diagnosis3, diagnosis4) {
		if (Selfdiagnosis.isValid() == true) {
			var totalScore = 0;
		
			for (var i = 1; i <= Selfdiagnosis.inputLength; i++) {
				var txtScore = $("input[name=q"+i+"]:radio:checked", Selfdiagnosis.$context).val();
				totalScore += parseInt(txtScore);
			}
			$(".clsShowHide", Selfdiagnosis.$context).hide();
			if (totalScore >= 0 && totalScore < diagnosis2){
				$("#diagnosis1", Selfdiagnosis.$context).fadeIn();
			}else if (totalScore >= diagnosis2 && totalScore < diagnosis3){
				$("#diagnosis2", Selfdiagnosis.$context).fadeIn();
			}else if (totalScore >= diagnosis3 && totalScore < diagnosis4){
				$("#diagnosis3", Selfdiagnosis.$context).fadeIn();
			}else if (totalScore >= diagnosis4) {
				$("#diagnosis4", Selfdiagnosis.$context).fadeIn();
			}

			return true;
		} else {
			return false;
		}
	},

	diagnoseThreeCase: function(diagnosis2, diagnosis3) {
		if (Selfdiagnosis.isValid() == true) {
			var totalScore = 0;
		
			for (var i = 1; i <= Selfdiagnosis.inputLength; i++) {
				var txtScore = $("input[name=q"+i+"]:radio:checked", Selfdiagnosis.$context).val();
				totalScore += parseInt(txtScore);
			}
			$(".clsShowHide", Selfdiagnosis.$context).hide();
			if (totalScore >= 0 && totalScore < diagnosis2){
				$("#diagnosis1", Selfdiagnosis.$context).fadeIn();
			}else if (totalScore >= diagnosis2 && totalScore < diagnosis3){
				$("#diagnosis2", Selfdiagnosis.$context).fadeIn();
			}else if (totalScore >= diagnosis3){
				$("#diagnosis3", Selfdiagnosis.$context).fadeIn();
			}

			return true;
		} else {
			return false;
		}
	},

	lovingType: function() {
		if (Selfdiagnosis.isValid() == true) {
				
			var totalScore = 0;
			var questionScoreAry = [0, 0, 0, 0, 0, 0];
			for (var i = 1; i <= Selfdiagnosis.inputLength; i++) {
				var txtScore = $("input[name=q"+i+"]:radio:checked").val();
				switch(i) {
					case 2: case 5: case 13: case 20: case 23:
						questionScoreAry[0] += parseInt(txtScore); break;

					case 8: case 9: case 19: case 25: case 28:
						questionScoreAry[1] += parseInt(txtScore); break;

					case 4: case 7: case 10: case 24: case 30:
						questionScoreAry[2] += parseInt(txtScore); break;

					case 3: case 11: case 14: case 16: case 27:
						questionScoreAry[3] += parseInt(txtScore); break;

					case 1: case 2: case 15: case 22: case 26:
						questionScoreAry[4] += parseInt(txtScore); break;

					case 6: case 17: case 18: case 21: case 29:
						questionScoreAry[5] += parseInt(txtScore); break;
				}
			}
			var maxScore = Math.max.apply(Math,questionScoreAry);

			var numOfMax = 0;
			for (var i = 0; i < 6; i++) {
				if (questionScoreAry[i] === maxScore) {
					numOfMax += 1 ;
				} 
			}

			/**
			 *  결과창 display
			 */
			$(".clsShowHide", Selfdiagnosis.$context).hide();
			if (numOfMax >= 2) { // Max 인 유형이 2개이상있으면 비결정형 문구를 먼저 보이게 한다.
				$("#diagnosis7", Selfdiagnosis.$context).fadeIn();
			}
				
			// max 인 것들 인덱스 전부 구해서 작업하기
			var pos = questionScoreAry.indexOf(maxScore);

			while (pos > -1) {
				$("#diagnosis" + (pos + 1), Selfdiagnosis.$context).fadeIn();
				pos = questionScoreAry.indexOf(maxScore, pos + 1);
			}

			return true;
		} else {
			return false;
		}
	}
};