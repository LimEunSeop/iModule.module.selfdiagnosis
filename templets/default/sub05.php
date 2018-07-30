<?php
/**
 * 이 파일은 iModule Selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * Selfdiagnosis 고독감 자가진단 템플릿
 * 
 * @file /modules/selfdiagnosis/templets/default/sub05.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license MIT License
 * @version 0.0.1
 * @modified 2018. 7. 23.
 */
if (defined('__IM__') == false) exit;
?>
<br><br><h1>고독감</h1><br>
<p>
    <b>자신이 경험하는 외로움의 정도</b>를 알아볼 수 있도록 아래에 이와 관련된 여러 경험 내용들이 열거되어 있습니다.
</p>
<p>
    각 문항을 읽어보시고 요즈음 <b>이러한 경험을 얼마나 자주 했는지</b> 그 정도를 체크해 보십시오.
</p>
<div class="container">
    <table class="selection-screen">
        <thead>
            <th></th>
            <th>
                <ul class="degree-4">
                    <li>전혀<br>아니다</li>
                    <li>가끔<br>그렇다</li>
                    <li>자주<br>그렇다</li>
                    <li>항상<br>그렇다</li>
                </ul>
            </th>
        </thead>
        
        <tbody>
        <tr>
            <th><span class="list-icon"></span>  1. 내 주변의 사람들과 잘 어울리지 못한다.</th>
            <td class="selection-4">
                <input type="radio" name="q1" value="0" id="q10"><label for="q10">전혀 아니다<br></label>
                <input type="radio" name="q1" value="1" id="q11"><label for="q11">가끔 그렇다<br></label>
                <input type="radio" name="q1" value="2" id="q12"><label for="q12">자주 그렇다<br></label>
                <input type="radio" name="q1" value="3" id="q13"><label for="q13">항상 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  2. 나와 함께 해 줄 친구가 없다.</th>
            <td class="selection-4">
                <input type='radio' name='q2' value='0' id='q20'><label for='q20'>전혀 아니다<br></label>
                <input type='radio' name='q2' value='1' id='q21'><label for='q21'>가끔 그렇다<br></label>
                <input type='radio' name='q2' value='2' id='q22'><label for='q22'>자주 그렇다<br></label>
                <input type='radio' name='q2' value='3' id='q23'><label for='q23'>항상 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  3. 친구들 모임에서 소속감을 느낄 수가 없다.</th>
            <td class="selection-4">
                <input type='radio' name='q3' value='0' id='q30'><label for='q30'>전혀 아니다<br></label>
                <input type='radio' name='q3' value='1' id='q31'><label for='q31'>가끔 그렇다<br></label>
                <input type='radio' name='q3' value='2' id='q32'><label for='q32'>자주 그렇다<br></label>
                <input type='radio' name='q3' value='3' id='q33'><label for='q33'>항상 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  4. 나의 관심과 생각은 주위 사람들과 동떨어진 것<br>
                <span class="indent-one">같다.</span></th>
            <td class="selection-4">
                <input type='radio' name='q4' value='0' id='q40'><label for='q40'>전혀 아니다<br></label>
                <input type='radio' name='q4' value='1' id='q41'><label for='q41'>가끔 그렇다<br></label>
                <input type='radio' name='q4' value='2' id='q42'><label for='q42'>자주 그렇다<br></label>
                <input type='radio' name='q4' value='3' id='q43'><label for='q43'>항상 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  5. 나와 가깝게 느껴지는 사람들이 내 주위에는 없다.</th>
            <td class="selection-4">
                <input type='radio' name='q5' value='0' id='q50'><label for='q50'>전혀 아니다<br></label>
                <input type='radio' name='q5' value='1' id='q51'><label for='q51'>가끔 그렇다<br></label>
                <input type='radio' name='q5' value='2' id='q52'><label for='q52'>자주 그렇다<br></label>
                <input type='radio' name='q5' value='3' id='q53'><label for='q53'>항상 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  6. 어쩐지 버려진 듯한 느낌이다.</th>
            <td class="selection-4">
                <input type='radio' name='q6' value='0' id='q60'><label for='q60'>전혀 아니다<br></label>
                <input type='radio' name='q6' value='1' id='q61'><label for='q61'>가끔 그렇다<br></label>
                <input type='radio' name='q6' value='2' id='q62'><label for='q62'>자주 그렇다<br></label>
                <input type='radio' name='q6' value='3' id='q63'><label for='q63'>항상 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  7. 나를 진정으로 아는 사람은 아무도 없다.</th>
            <td class="selection-4">
                <input type='radio' name='q7' value='0' id='q70'><label for='q70'>전혀 아니다<br></label>
                <input type='radio' name='q7' value='1' id='q71'><label for='q71'>가끔 그렇다<br></label>
                <input type='radio' name='q7' value='2' id='q72'><label for='q72'>자주 그렇다<br></label>
                <input type='radio' name='q7' value='3' id='q73'><label for='q73'>항상 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  8. 내가 믿고 의지할 만한 사람이 없다.</th>
            <td class="selection-4">
                <input type='radio' name='q8' value='0' id='q80'><label for='q80'>전혀 아니다<br></label>
                <input type='radio' name='q8' value='1' id='q81'><label for='q81'>가끔 그렇다<br></label>
                <input type='radio' name='q8' value='2' id='q82'><label for='q82'>자주 그렇다<br></label>
                <input type='radio' name='q8' value='3' id='q83'><label for='q83'>항상 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  9. 혼자 있을 때 고독하게 느낀다.</th>
            <td class="selection-4">
                <input type='radio' name='q9' value='0' id='q90'><label for='q90'>전혀 아니다<br></label>
                <input type='radio' name='q9' value='1' id='q91'><label for='q91'>가끔 그렇다<br></label>
                <input type='radio' name='q9' value='2' id='q92'><label for='q92'>자주 그렇다<br></label>
                <input type='radio' name='q9' value='3' id='q93'><label for='q93'>항상 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  10. 자주 고독하다고 느낀다.</th>
            <td class="selection-4">
                <input type='radio' name='q10' value='0' id='q100'><label for='q100'>전혀 아니다<br></label>
                <input type='radio' name='q10' value='1' id='q101'><label for='q101'>가끔 그렇다<br></label>
                <input type='radio' name='q10' value='2' id='q102'><label for='q102'>자주 그렇다<br></label>
                <input type='radio' name='q10' value='3' id='q103'><label for='q103'>항상 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  11. 고독하다고 느낄 때 그 정도가 심한 편이다.</th>
            <td class="selection-4">
                <input type='radio' name='q11' value='0' id='q110'><label for='q110'>전혀 아니다<br></label>
                <input type='radio' name='q11' value='1' id='q111'><label for='q111'>가끔 그렇다<br></label>
                <input type='radio' name='q11' value='2' id='q112'><label for='q112'>자주 그렇다<br></label>
                <input type='radio' name='q11' value='3' id='q113'><label for='q113'>항상 그렇다<br></label>
            </td>
        </tr>        
        </tbody>
    </table>
</div>

<div class="btn-container">
    <a href="#" class="action-button shadow animate blue">고독감 자가진단 결과보기</a>
</div>

<div class="resultbox">
    <div class="container clsShowHide" id="diagnosis1">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 0 ~ 8점</h4>
        <p>고독하지 않은 상태입니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis2">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 9 ~ 16점</h4>
        <p>가벼운 고독상태에 있어 보이므로, 새롭게 기분전환 하는 노력이 필요합니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis3">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 17 ~ 25점</h4>
        <p>상당한 정도의 고독 상태에 있어 보입니다. 고독상태를 극복하기 위한 적극적인 노력이 필요하며, 이러한 고독상태가 두어 달 이상 지속되는 경우에는 전문가의 도움을 받을 필요가 있습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis4">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 26점 이상</h4>
        <p>심한 고독 상태에 있어 보입니다. 가능한 한 빨리 전문가의 도움을 받을 필요가 있습니다.</p>
    </div>
</div>