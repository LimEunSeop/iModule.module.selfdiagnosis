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
                <input type="radio" name="q1" value="1">
                <input type="radio" name="q1" value="2">
                <input type="radio" name="q1" value="3">
                <input type="radio" name="q1" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  2. 나는 불같은 성질을 지녔다.</th>
            <td class="selection-4">
                <input type="radio" name="q2" value="1">
                <input type="radio" name="q2" value="2">
                <input type="radio" name="q2" value="3">
                <input type="radio" name="q2" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  3. 나는 격해지기 쉬운 사람이다.</th>
            <td class="selection-4">
                <input type="radio" name="q3" value="1">
                <input type="radio" name="q3" value="2">
                <input type="radio" name="q3" value="3">
                <input type="radio" name="q3" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  4. 나는 다른 사람이 잘못해서 내 일이 늦어지게 되면<br>
                <span class="indent-one">화가 난다.</span></th>
            <td class="selection-4">
                <input type="radio" name="q4" value="1">
                <input type="radio" name="q4" value="2">
                <input type="radio" name="q4" value="3">
                <input type="radio" name="q4" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  5. 나는 일을 잘하고도 다른 사람으로부터 인정받지<br>
                <span class="indent-one">못하면 분통이 터진다.</span></th>
            <td class="selection-4">
                <input type="radio" name="q5" value="1">
                <input type="radio" name="q5" value="2">
                <input type="radio" name="q5" value="3">
                <input type="radio" name="q5" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  6. 나는 쉽게 화를 낸다.</th>
            <td class="selection-4">
                <input type="radio" name="q6" value="1">
                <input type="radio" name="q6" value="2">
                <input type="radio" name="q6" value="3">
                <input type="radio" name="q6" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  7. 나는 화가 나면 욕을 한다.</th>
            <td class="selection-4">
                <input type="radio" name="q7" value="1">
                <input type="radio" name="q7" value="2">
                <input type="radio" name="q7" value="3">
                <input type="radio" name="q7" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  8. 나는 다른 사람 앞에서 비판을 받게 되면 격분한다.</th>
            <td class="selection-4">
                <input type="radio" name="q8" value="1">
                <input type="radio" name="q8" value="2">
                <input type="radio" name="q8" value="3">
                <input type="radio" name="q8" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  9. 나는 내 일이 막히면, 누군가를 때려주고 싶다.</th>
            <td class="selection-4">
                <input type="radio" name="q9" value="1">
                <input type="radio" name="q9" value="2">
                <input type="radio" name="q9" value="3">
                <input type="radio" name="q9" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  10. 나는 일을 잘 했는데도 나쁜 평가를 받게 되면<br>
                <span class="indent-two">격분을 느낀다.</span></th>
            <td class="selection-4">
                <input type="radio" name="q10" value="1">
                <input type="radio" name="q10" value="2">
                <input type="radio" name="q10" value="3">
                <input type="radio" name="q10" value="4">
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