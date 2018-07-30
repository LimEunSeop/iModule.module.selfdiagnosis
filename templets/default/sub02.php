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
<br><br><h1>불안</h1><br>
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
            <th><span class="list-icon"></span>  1. 침착하지 못하다.</th>
            <td class="selection-4">
                <input type="radio" name="q1" value="0" id="q10"><label for="q10">전혀 아니다<br></label>
                <input type="radio" name="q1" value="1" id="q11"><label for="q11">조금 느꼈다<br></label>
                <input type="radio" name="q1" value="2" id="q12"><label for="q12">상당히 느꼈다<br></label>
                <input type="radio" name="q1" value="3" id="q13"><label for="q13">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  2. 나쁜 일이 일어날 것 같은 생각이 든다.</th>
            <td class="selection-4">
                <input type="radio" name="q2" value="0" id="q20"><label for="q20">전혀 아니다<br></label>
                <input type="radio" name="q2" value="1" id="q21"><label for="q21">조금 느꼈다<br></label>
                <input type="radio" name="q2" value="2" id="q22"><label for="q22">상당히 느꼈다<br></label>
                <input type="radio" name="q2" value="3" id="q23"><label for="q23">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  3. 자주 손이나 발이 떨린다.</th>
            <td class="selection-4">
                <input type="radio" name="q3" value="0" id="q30"><label for="q30">전혀 아니다<br></label>
                <input type="radio" name="q3" value="1" id="q31"><label for="q31">조금 느꼈다<br></label>
                <input type="radio" name="q3" value="2" id="q32"><label for="q32">상당히 느꼈다<br></label>
                <input type="radio" name="q3" value="3" id="q33"><label for="q33">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  4. 가끔씩 심장이 두근거리고 빨리 뛴다.</th>
            <td class="selection-4">
                <input type="radio" name="q4" value="0" id="q40"><label for="q40">전혀 아니다<br></label>
                <input type="radio" name="q4" value="1" id="q41"><label for="q41">조금 느꼈다<br></label>
                <input type="radio" name="q4" value="2" id="q42"><label for="q42">상당히 느꼈다<br></label>
                <input type="radio" name="q4" value="3" id="q43"><label for="q43">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  5. 흥분된 느낌을 받는다.</th>
            <td class="selection-4">
                <input type="radio" name="q5" value="0" id="q50"><label for="q50">전혀 아니다<br></label>
                <input type="radio" name="q5" value="1" id="q51"><label for="q51">조금 느꼈다<br></label>
                <input type="radio" name="q5" value="2" id="q52"><label for="q52">상당히 느꼈다<br></label>
                <input type="radio" name="q5" value="3" id="q53"><label for="q53">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  6. 어지러움이나 현기증을 느낀다.</th>
            <td class="selection-4">
                <input type="radio" name="q6" value="0" id="q60"><label for="q60">전혀 아니다<br></label>
                <input type="radio" name="q6" value="1" id="q61"><label for="q61">조금 느꼈다<br></label>
                <input type="radio" name="q6" value="2" id="q62"><label for="q62">상당히 느꼈다<br></label>
                <input type="radio" name="q6" value="3" id="q63"><label for="q63">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  7. 편안하게 쉴 수가 없다.</th>
            <td class="selection-4">
                <input type="radio" name="q7" value="0" id="q70"><label for="q70">전혀 아니다<br></label>
                <input type="radio" name="q7" value="1" id="q71"><label for="q71">조금 느꼈다<br></label>
                <input type="radio" name="q7" value="2" id="q72"><label for="q72">상당히 느꼈다<br></label>
                <input type="radio" name="q7" value="3" id="q73"><label for="q73">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  8. 신경이 예민하다.</th>
            <td class="selection-4">
                <input type="radio" name="q8" value="0" id="q80"><label for="q80">전혀 아니다<br></label>
                <input type="radio" name="q8" value="1" id="q81"><label for="q81">조금 느꼈다<br></label>
                <input type="radio" name="q8" value="2" id="q82"><label for="q82">상당히 느꼈다<br></label>
                <input type="radio" name="q8" value="3" id="q83"><label for="q83">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  9. 가끔씩 숨이 막히고 질식할 것 같다.</th>
            <td class="selection-4">
                <input type="radio" name="q9" value="0" id="q90"><label for="q90">전혀 아니다<br></label>
                <input type="radio" name="q9" value="1" id="q91"><label for="q91">조금 느꼈다<br></label>
                <input type="radio" name="q9" value="2" id="q92"><label for="q92">상당히 느꼈다<br></label>
                <input type="radio" name="q9" value="3" id="q93"><label for="q93">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  10. 안절부절 못한다.</th>
            <td class="selection-4">
                <input type="radio" name="q10" value="0" id="q100"><label for="q100">전혀 아니다<br></label>
                <input type="radio" name="q10" value="1" id="q101"><label for="q101">조금 느꼈다<br></label>
                <input type="radio" name="q10" value="2" id="q102"><label for="q102">상당히 느꼈다<br></label>
                <input type="radio" name="q10" value="3" id="q103"><label for="q103">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  11. 미치거나 죽을 것 같은 두려움을 느낀다.</th>
            <td class="selection-4">
                <input type="radio" name="q11" value="0" id="q110"><label for="q110">전혀 아니다<br></label>
                <input type="radio" name="q11" value="1" id="q111"><label for="q111">조금 느꼈다<br></label>
                <input type="radio" name="q11" value="2" id="q112"><label for="q112">상당히 느꼈다<br></label>
                <input type="radio" name="q11" value="3" id="q113"><label for="q113">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  12. 자주 소화가 잘 안되고 늘 뱃속이 불편하다.</th>
            <td class="selection-4">
                <input type="radio" name="q12" value="0" id="q120"><label for="q120">전혀 아니다<br></label>
                <input type="radio" name="q12" value="1" id="q121"><label for="q121">조금 느꼈다<br></label>
                <input type="radio" name="q12" value="2" id="q122"><label for="q122">상당히 느꼈다<br></label>
                <input type="radio" name="q12" value="3" id="q123"><label for="q123">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  13. 자주 얼굴이 붉어지곤 한다.</th>
            <td class="selection-4">
                <input type="radio" name="q13" value="0" id="q130"><label for="q130">전혀 아니다<br></label>
                <input type="radio" name="q13" value="1" id="q131"><label for="q131">조금 느꼈다<br></label>
                <input type="radio" name="q13" value="2" id="q132"><label for="q132">상당히 느꼈다<br></label>
                <input type="radio" name="q13" value="3" id="q133"><label for="q133">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  14. 근육이 긴장되고 뻣뻣해 지고 저린다.</th>
            <td class="selection-4">
                <input type="radio" name="q14" value="0" id="q140"><label for="q140">전혀 아니다<br></label>
                <input type="radio" name="q14" value="1" id="q141"><label for="q141">조금 느꼈다<br></label>
                <input type="radio" name="q14" value="2" id="q142"><label for="q142">상당히 느꼈다<br></label>
                <input type="radio" name="q14" value="3" id="q143"><label for="q143">심하게 느꼈다<br></label>
            </td>
        </tr>
        
        </tbody>
    </table>
</div>

<div class="btn-container">
    <a href="#" class="action-button shadow animate blue">불안 자가진단 결과보기</a>
</div>

<div class="resultbox">
    <div class="container clsShowHide" id="diagnosis1">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 0 ~ 9점</h4>
        <p>심리적으로 안정되어 있고, 정상적인 수준의 불안을 경험하고 있습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis2">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 10 ~ 19점</h4>
        <p>가벼운 정도의 불안을 경험하고 있습니다. 현재의 상태가 그렇게 문제될 것은 없지만, 좀 더 안정을 찾는 방법을 강구해 보십시오.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis3">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 20 ~ 29점</h4>
        <p>상당한 정도의 불안을 경험하고 있습니다. 정서적인 안정감이 부족하고 생활을 하시는 데도 어려움을 겪을 듯 합니다. 이의 극복을 위하여 전문가의 도움을 받는 것이 좋겠습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis4">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 30 ~ 45점</h4>
        <p>심한 불안을 경험하고 있습니다. 거의 항상 불안하여 정상적으로 일상 생활을 해나가는데 어려움을 경험할 것  같습니다. 이미 도움을 요청했을 수도 있지만, 그렇지 않다면 가능한 한 조속한 시일 내에 전문가를 통해 상담 받을 것을 권합니다.</p>
    </div>
</div>