<?php
/**
 * 이 파일은 iModule Selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * Selfdiagnosis 불안 자가진단 템플릿
 * 
 * @file /modules/selfdiagnosis/templets/default/sub02.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license MIT License
 * @version 0.0.1
 * @modified 2018. 7. 23.
 */
if (defined('__IM__') == false) exit;
?>
<p>
    아래의 항목들은 불안한 상태에서 경험할 수 있는 것들입니다. 먼저 각 항목을 주의깊게 읽으시고,<br>
 <b>오늘을 포함하여 지난 한 주 동안 자신의 경험이나 상태</b>를 정도에 따라 적당한 칸에 표시하세요.
</p>
<div class="container">
    <table class="selection-screen">
        <thead>
            <th></th>
            <th>
                <ul class="degree-4">
                    <li>전혀<br>아니다</li>
                    <li>조금<br>느꼈다</li>
                    <li>상당히<br>느꼈다</li>
                    <li>심하게<br>느꼈다</li>
                </ul>
            </th>
        </thead>
        
        <tbody>
        <tr>
            <th><span class="list-icon"></span> 1. 침착하지 못하다.</th>
            <td class="selection-4">
                <input type="radio" name="q1" value="0">
                <input type="radio" name="q1" value="1">
                <input type="radio" name="q1" value="2">
                <input type="radio" name="q1" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 2. 나쁜 일이 일어날 것 같은 생각이 든다.</th>
            <td class="selection-4">
                <input type="radio" name="q2" value="0">
                <input type="radio" name="q2" value="1">
                <input type="radio" name="q2" value="2">
                <input type="radio" name="q2" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 3. 자주 손이나 발이 떨린다.</th>
            <td class="selection-4">
                <input type="radio" name="q3" value="0">
                <input type="radio" name="q3" value="1">
                <input type="radio" name="q3" value="2">
                <input type="radio" name="q3" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 4. 가끔씩 심장이 두근거리고 빨리 뛴다.</th>
            <td class="selection-4">
                <input type="radio" name="q4" value="0">
                <input type="radio" name="q4" value="1">
                <input type="radio" name="q4" value="2">
                <input type="radio" name="q4" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 5. 흥분된 느낌을 받는다.</th>
            <td class="selection-4">
                <input type="radio" name="q5" value="0">
                <input type="radio" name="q5" value="1">
                <input type="radio" name="q5" value="2">
                <input type="radio" name="q5" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 6. 어지러움이나 현기증을 느낀다.</th>
            <td class="selection-4">
                <input type="radio" name="q6" value="0">
                <input type="radio" name="q6" value="1">
                <input type="radio" name="q6" value="2">
                <input type="radio" name="q6" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 7. 편안하게 쉴 수가 없다.</th>
            <td class="selection-4">
                <input type="radio" name="q7" value="0">
                <input type="radio" name="q7" value="1">
                <input type="radio" name="q7" value="2">
                <input type="radio" name="q7" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 8. 신경이 예민하다.</th>
            <td class="selection-4">
                <input type="radio" name="q8" value="0">
                <input type="radio" name="q8" value="1">
                <input type="radio" name="q8" value="2">
                <input type="radio" name="q8" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 9. 가끔씩 숨이 막히고 질식할 것 같다.</th>
            <td class="selection-4">
                <input type="radio" name="q9" value="0">
                <input type="radio" name="q9" value="1">
                <input type="radio" name="q9" value="2">
                <input type="radio" name="q9" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 10. 안절부절 못한다.</th>
            <td class="selection-4">
                <input type="radio" name="q10" value="0">
                <input type="radio" name="q10" value="1">
                <input type="radio" name="q10" value="2">
                <input type="radio" name="q10" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 11. 미치거나 죽을 것 같은 두려움을 느낀다.</th>
            <td class="selection-4">
                <input type="radio" name="q11" value="0">
                <input type="radio" name="q11" value="1">
                <input type="radio" name="q11" value="2">
                <input type="radio" name="q11" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 12. 자주 소화가 잘 안되고 늘 뱃속이 불편하다.</th>
            <td class="selection-4">
                <input type="radio" name="q12" value="0">
                <input type="radio" name="q12" value="1">
                <input type="radio" name="q12" value="2">
                <input type="radio" name="q12" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 13. 자주 얼굴이 붉어지곤 한다.</th>
            <td class="selection-4">
                <input type="radio" name="q13" value="0">
                <input type="radio" name="q13" value="1">
                <input type="radio" name="q13" value="2">
                <input type="radio" name="q13" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 14. 근육이 긴장되고 뻣뻣해 지고 저린다.</th>
            <td class="selection-4">
                <input type="radio" name="q14" value="0">
                <input type="radio" name="q14" value="1">
                <input type="radio" name="q14" value="2">
                <input type="radio" name="q14" value="3">
            </td>
        </tr>
        
        </tbody>
    </table>
</div>

<div class="btn-container">
    <a href="#" class="action-button shadow animate blue">불안 자가진단 결과보기</a>
</div>


<div class="container clsShowHide" id="diagnosis1">
    <h2>자가진단 결과보기</h2>
    <h4>0 ~ 9점</h4>
    <p>심리적으로 안정되어 있고, 정상적인 수준의 불안을 경험하고 있습니다.</p>
</div>

<div class="container clsShowHide" id="diagnosis2">
    <h2>자가진단 결과보기</h2>
    <h4>10 ~ 19점</h4>
    <p>가벼운 정도의 불안을 경험하고 있습니다. 현재의 상태가 그렇게 문제될 것은 없지만, 좀 더 안정을 찾는 방법을 강구해 보십시오.</p>
</div>

<div class="container clsShowHide" id="diagnosis3">
    <h2>자가진단 결과보기</h2>
    <h4>20 ~ 29점</h4>
    <p>상당한 정도의 불안을 경험하고 있습니다. 정서적인 안정감이 부족하고 생활을 하시는 데도 어려움을 겪을 듯 합니다. 이의 극복을 위하여 전문가의 도움을 받는 것이 좋겠습니다.</p>
</div>

<div class="container clsShowHide" id="diagnosis4">
    <h2>자가진단 결과보기</h2>
    <h4>30 ~ 45점</h4>
    <p>심한 불안을 경험하고 있습니다. 거의 항상 불안하여 정상적으로 일상 생활을 해나가는데 어려움을 경험할 것  같습니다. 이미 도움을 요청했을 수도 있지만, 그렇지 않다면 가능한 한 조속한 시일 내에 전문가를 통해 상담 받을 것을 권합니다.</p>
</div>