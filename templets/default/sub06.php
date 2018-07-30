<?php
/**
 * 이 파일은 iModule Selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * Selfdiagnosis 분노 자가진단 템플릿
 * 
 * @file /modules/selfdiagnosis/templets/default/sub06.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license MIT License
 * @version 0.0.1
 * @modified 2018. 7. 23.
 */
if (defined('__IM__') == false) exit;
?>
<br><br><h1>분노</h1><br>
<p>
    다음은 <b>분노성향에 대한 내용들</b>입니다. 각 문항을 읽어보시고 당신이 평소에 일반적으로 느끼고 있는 <b>자신의 성향을 가장 잘 나타낸다고 생각되는 정도에 체크</b>하십시오.
</p>
<div class="container">
    <table class="selection-screen">
        <thead>
            <th></th>
            <th>
                <ul class="degree-4">
                    <li>거의<br>아니다</li>
                    <li>가끔<br>그렇다</li>
                    <li>자주<br>그렇다</li>
                    <li>거의<br>그렇다</li>
                </ul>
            </th>
        </thead>
        
        <tbody>
        <tr>
            <th><span class="list-icon"></span>  1. 나는 성미가 급하다.</th>
            <td class="selection-4">
                <input type='radio' name='q1' value='1' id='q10'><label for='q10'>거의 아니다<br></label>
                <input type='radio' name='q1' value='2' id='q11'><label for='q11'>가끔 그렇다<br></label>
                <input type='radio' name='q1' value='3' id='q12'><label for='q12'>자주 그렇다<br></label>
                <input type='radio' name='q1' value='4' id='q13'><label for='q13'>거의 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  2. 나는 불같은 성질을 지녔다.</th>
            <td class="selection-4">
                <input type='radio' name='q2' value='1' id='q20'><label for='q20'>거의 아니다<br></label>
                <input type='radio' name='q2' value='2' id='q21'><label for='q21'>가끔 그렇다<br></label>
                <input type='radio' name='q2' value='3' id='q22'><label for='q22'>자주 그렇다<br></label>
                <input type='radio' name='q2' value='4' id='q23'><label for='q23'>거의 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  3. 나는 격해지기 쉬운 사람이다.</th>
            <td class="selection-4">
                <input type='radio' name='q3' value='1' id='q30'><label for='q30'>거의 아니다<br></label>
                <input type='radio' name='q3' value='2' id='q31'><label for='q31'>가끔 그렇다<br></label>
                <input type='radio' name='q3' value='3' id='q32'><label for='q32'>자주 그렇다<br></label>
                <input type='radio' name='q3' value='4' id='q33'><label for='q33'>거의 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  4. 나는 다른 사람이 잘못해서 내 일이 늦어지게 되면<br>
                <span class="indent-one">화가 난다.</span></th>
            <td class="selection-4">
                <input type='radio' name='q4' value='1' id='q40'><label for='q40'>거의 아니다<br></label>
                <input type='radio' name='q4' value='2' id='q41'><label for='q41'>가끔 그렇다<br></label>
                <input type='radio' name='q4' value='3' id='q42'><label for='q42'>자주 그렇다<br></label>
                <input type='radio' name='q4' value='4' id='q43'><label for='q43'>거의 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  5. 나는 일을 잘하고도 다른 사람으로부터 인정받지<br>
                <span class="indent-one">못하면 분통이 터진다.</span></th>
            <td class="selection-4">
                <input type='radio' name='q5' value='1' id='q50'><label for='q50'>거의 아니다<br></label>
                <input type='radio' name='q5' value='2' id='q51'><label for='q51'>가끔 그렇다<br></label>
                <input type='radio' name='q5' value='3' id='q52'><label for='q52'>자주 그렇다<br></label>
                <input type='radio' name='q5' value='4' id='q53'><label for='q53'>거의 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  6. 나는 쉽게 화를 낸다.</th>
            <td class="selection-4">
                <input type='radio' name='q6' value='1' id='q60'><label for='q60'>거의 아니다<br></label>
                <input type='radio' name='q6' value='2' id='q61'><label for='q61'>가끔 그렇다<br></label>
                <input type='radio' name='q6' value='3' id='q62'><label for='q62'>자주 그렇다<br></label>
                <input type='radio' name='q6' value='4' id='q63'><label for='q63'>거의 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  7. 나는 화가 나면 욕을 한다.</th>
            <td class="selection-4">
                <input type='radio' name='q7' value='1' id='q70'><label for='q70'>거의 아니다<br></label>
                <input type='radio' name='q7' value='2' id='q71'><label for='q71'>가끔 그렇다<br></label>
                <input type='radio' name='q7' value='3' id='q72'><label for='q72'>자주 그렇다<br></label>
                <input type='radio' name='q7' value='4' id='q73'><label for='q73'>거의 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  8. 나는 다른 사람 앞에서 비판을 받게 되면 격분한다.</th>
            <td class="selection-4">
                <input type='radio' name='q8' value='1' id='q80'><label for='q80'>거의 아니다<br></label>
                <input type='radio' name='q8' value='2' id='q81'><label for='q81'>가끔 그렇다<br></label>
                <input type='radio' name='q8' value='3' id='q82'><label for='q82'>자주 그렇다<br></label>
                <input type='radio' name='q8' value='4' id='q83'><label for='q83'>거의 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  9. 나는 내 일이 막히면, 누군가를 때려주고 싶다.</th>
            <td class="selection-4">
                <input type='radio' name='q9' value='1' id='q90'><label for='q90'>거의 아니다<br></label>
                <input type='radio' name='q9' value='2' id='q91'><label for='q91'>가끔 그렇다<br></label>
                <input type='radio' name='q9' value='3' id='q92'><label for='q92'>자주 그렇다<br></label>
                <input type='radio' name='q9' value='4' id='q93'><label for='q93'>거의 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  10. 나는 일을 잘 했는데도 나쁜 평가를 받게 되면<br>
                <span class="indent-two">격분을 느낀다.</span></th>
            <td class="selection-4">
                <input type='radio' name='q10' value='1' id='q100'><label for='q100'>거의 아니다<br></label>
                <input type='radio' name='q10' value='2' id='q101'><label for='q101'>가끔 그렇다<br></label>
                <input type='radio' name='q10' value='3' id='q102'><label for='q102'>자주 그렇다<br></label>
                <input type='radio' name='q10' value='4' id='q103'><label for='q103'>거의 그렇다<br></label>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class="btn-container">
    <a href="#" class="action-button shadow animate blue">분노 자가진단 결과보기</a>
</div>

<div class="resultbox">
    <div class="container clsShowHide" id="diagnosis1">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 0 ~ 15점</h4>
        <p>평소 정상적인 수준의 분노를 경험하고 있을 가능성이 높습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis2">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 16 ~ 25점</h4>
        <p>평소 가벼운 정도의 분노를 경험하고 있을 가능성이 높습니다. 현재의 상태가 그렇게 문제될 것은 없지만, 좀 더 자신의 분노를 통제하는 방법을 강구해 보십시오.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis3">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 26 ~ 28점</h4>
        <p>상당한 정도의 분노를 경험하고 있을 가능성이 높습니다. 분노통제와 대인관계의 어려움을 겪고 있을 듯 합니다. 이의 극복을 위하여 전문가의 도움을 받는 것이 좋겠습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis4">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 29 ~ 40점</h4>
        <p>심한 분노를 경험하고 있을 가능성이 높습니다. 거의 항상 화가 나있거나 화 낼 준비가 되어있는 상태로 정상적인 대인관계를 맺는데 어려움을 경험 하고 있을 것 같습니다. 이미 도움을 요청했을 수도 있지만, 그렇지 않다면 가능한 한 조속한 시일내에 전문가를 통해 상담 받을 것을 권합니다.</p>
    </div>
</div>