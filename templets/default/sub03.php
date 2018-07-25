<?php
/**
 * 이 파일은 iModule Selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * Selfdiagnosis 사회불안 자가진단 템플릿
 * 
 * @file /modules/selfdiagnosis/templets/default/sub03.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license MIT License
 * @version 0.0.1
 * @modified 2018. 7. 23.
 */
if (defined('__IM__') == false) exit;
?>
<p>
    다음 문항을 읽어보시고 <b>요즈음 자신의 상태에 가장 적합하다고 생각되는 정도</b>에 체크하십시오.
</p>
<div class="container">
    <table class="selection-screen">
        <thead>
            <th></th>
            <th>
                <ul class="degree-5">
                    <li>전혀<br>아니다</li>
                    <li>약간<br>그렇다</li>
                    <li>웬만큼<br>그렇다</li>
                    <li>상당히<br>그렇다</li>
                    <li>매우<br>그렇다</li>
                </ul>
            </th>
        </thead>
        
        <tbody>
        <tr>
            <th><span class="list-icon"></span> 1. 익숙하지 않은 사회적 상황에서도 편안함을 느낀다.</th>
            <td class="selection-5">
                <input type="radio" name="q1" value="0">
                <input type="radio" name="q1" value="1">
                <input type="radio" name="q1" value="2">
                <input type="radio" name="q1" value="3">
                <input type="radio" name="q1" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 2. 사람들과 적극적으로 어울려야하는 자리는 피하려고<br>
                <span class="indent-one">한다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q2" value="0">
                <input type="radio" name="q2" value="1">
                <input type="radio" name="q2" value="2">
                <input type="radio" name="q2" value="3">
                <input type="radio" name="q2" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 3. 낯선 사람들과 함께 있을 때 쉽게 마음이 편안해<br>
                <span class="indent-one">진다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q3" value="0">
                <input type="radio" name="q3" value="1">
                <input type="radio" name="q3" value="2">
                <input type="radio" name="q3" value="3">
                <input type="radio" name="q3" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 4. 특별히 사람들을 피하고 싶은 생각은 없다.</th>
            <td class="selection-5">
                <input type="radio" name="q4" value="0">
                <input type="radio" name="q4" value="1">
                <input type="radio" name="q4" value="2">
                <input type="radio" name="q4" value="3">
                <input type="radio" name="q4" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 5. 사람들과 어울리는 모임에서 종종 당황함을 느낀다.</th>
            <td class="selection-5">
                <input type="radio" name="q5" value="0">
                <input type="radio" name="q5" value="1">
                <input type="radio" name="q5" value="2">
                <input type="radio" name="q5" value="3">
                <input type="radio" name="q5" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 6. 사람들과 어울리는 모임에서 대개 차분하고 편안<br>
                <span class="indent-one">하다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q6" value="0">
                <input type="radio" name="q6" value="1">
                <input type="radio" name="q6" value="2">
                <input type="radio" name="q6" value="3">
                <input type="radio" name="q6" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 7. 이성에게 말을 걸 때 대체로 마음이 편하다.</th>
            <td class="selection-5">
                <input type="radio" name="q7" value="0">
                <input type="radio" name="q7" value="1">
                <input type="radio" name="q7" value="2">
                <input type="radio" name="q7" value="3">
                <input type="radio" name="q7" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 8. 잘 알지 못하는 사람에게 말을 거는 것을 피하려고<br>
                <span class="indent-one">한다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q8" value="0">
                <input type="radio" name="q8" value="1">
                <input type="radio" name="q8" value="2">
                <input type="radio" name="q8" value="3">
                <input type="radio" name="q8" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 9. 새로운 사람과 만날 기회가 생기면 자주 응한다.</th>
            <td class="selection-5">
                <input type="radio" name="q9" value="0">
                <input type="radio" name="q9" value="1">
                <input type="radio" name="q9" value="2">
                <input type="radio" name="q9" value="3">
                <input type="radio" name="q9" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 10. 우연하게 남녀가 같이 모이는 자리에서 종종 예민<br>
                <span class="indent-two">해지고 긴장된다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q10" value="0">
                <input type="radio" name="q10" value="1">
                <input type="radio" name="q10" value="2">
                <input type="radio" name="q10" value="3">
                <input type="radio" name="q10" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 11. 사람을 잘 알게 되기 전까지는 같이 있는 것이<br>
                <span class="indent-two">긴장된다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q11" value="0">
                <input type="radio" name="q11" value="1">
                <input type="radio" name="q11" value="2">
                <input type="radio" name="q11" value="3">
                <input type="radio" name="q11" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 12. 많은 사람들과 어울릴 때 보통 편안함을 느낀다.</th>
            <td class="selection-5">
                <input type="radio" name="q12" value="0">
                <input type="radio" name="q12" value="1">
                <input type="radio" name="q12" value="2">
                <input type="radio" name="q12" value="3">
                <input type="radio" name="q12" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 13. 사람들로부터 떨어져 있고 싶을 때가 자주 있다.</th>
            <td class="selection-5">
                <input type="radio" name="q13" value="0">
                <input type="radio" name="q13" value="1">
                <input type="radio" name="q13" value="2">
                <input type="radio" name="q13" value="3">
                <input type="radio" name="q13" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 14. 모르는 사람들 속에 있으면 보통 마음이 편치 않다.</th>
            <td class="selection-5">
                <input type="radio" name="q14" value="0">
                <input type="radio" name="q14" value="1">
                <input type="radio" name="q14" value="2">
                <input type="radio" name="q14" value="3">
                <input type="radio" name="q14" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 15. 사람을 처음 만날 때 대체로 편안함을 느낀다.</th>
            <td class="selection-5">
                <input type="radio" name="q15" value="0">
                <input type="radio" name="q15" value="1">
                <input type="radio" name="q15" value="2">
                <input type="radio" name="q15" value="3">
                <input type="radio" name="q15" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 16. 사람들에게 소개될 때 대체로 긴장하고 마음을<br>
                <span class="indent-two">졸인다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q16" value="0">
                <input type="radio" name="q16" value="1">
                <input type="radio" name="q16" value="2">
                <input type="radio" name="q16" value="3">
                <input type="radio" name="q16" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 17. 방에 낯선 사람이 꽉 차 있어도 거리낌 없이 들어갈<br>
                <span class="indent-two">수 있다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q17" value="0">
                <input type="radio" name="q17" value="1">
                <input type="radio" name="q17" value="2">
                <input type="radio" name="q17" value="3">
                <input type="radio" name="q17" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 18. 사람들이 모여 있는데 다가가서 어울리는 것을<br>
                <span class="indent-two">피하고 싶다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q18" value="0">
                <input type="radio" name="q18" value="1">
                <input type="radio" name="q18" value="2">
                <input type="radio" name="q18" value="3">
                <input type="radio" name="q18" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 19. 윗 사람이 나와 이야기하기를 원하면 거리낌 없이<br>
                <span class="indent-two">응한다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q19" value="0">
                <input type="radio" name="q19" value="1">
                <input type="radio" name="q19" value="2">
                <input type="radio" name="q19" value="3">
                <input type="radio" name="q19" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 20. 많은 사람들과 어울릴 때 신경이 예민해진다.</th>
            <td class="selection-5">
                <input type="radio" name="q20" value="0">
                <input type="radio" name="q20" value="1">
                <input type="radio" name="q20" value="2">
                <input type="radio" name="q20" value="3">
                <input type="radio" name="q20" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 21. 사람을 피하려는 경향이 있다.</th>
            <td class="selection-5">
                <input type="radio" name="q21" value="0">
                <input type="radio" name="q21" value="1">
                <input type="radio" name="q21" value="2">
                <input type="radio" name="q21" value="3">
                <input type="radio" name="q21" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 22. 파티나 친목회에서 기꺼이 사람들에게 말을<br>
                <span class="indent-two">건넨다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q22" value="0">
                <input type="radio" name="q22" value="1">
                <input type="radio" name="q22" value="2">
                <input type="radio" name="q22" value="3">
                <input type="radio" name="q22" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 23. 사람들이 많이 모인 집단에서는 좀처럼 마음이<br>
                <span class="indent-two">편하지 않다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q23" value="0">
                <input type="radio" name="q23" value="1">
                <input type="radio" name="q23" value="2">
                <input type="radio" name="q23" value="3">
                <input type="radio" name="q23" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 24. 사람들과 어울려야 하는 약속을 피하려고 자주<br>
                <span class="indent-two">핑계를 생각해낸다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q24" value="0">
                <input type="radio" name="q24" value="1">
                <input type="radio" name="q24" value="2">
                <input type="radio" name="q24" value="3">
                <input type="radio" name="q24" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 25. 때때로 사람들을 소개시켜 주는 책임을 맡는다.</th>
            <td class="selection-5">
                <input type="radio" name="q25" value="0">
                <input type="radio" name="q25" value="1">
                <input type="radio" name="q25" value="2">
                <input type="radio" name="q25" value="3">
                <input type="radio" name="q25" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 26. 공식적으로 사람들과 어울려야 하는 모임은<br>
                <span class="indent-two">피하려고 한다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q26" value="0">
                <input type="radio" name="q26" value="1">
                <input type="radio" name="q26" value="2">
                <input type="radio" name="q26" value="3">
                <input type="radio" name="q26" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 27. 사람들과 어울려야 하는 약속이면 대체로 다<br>
                <span class="indent-two">지킨다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q27" value="0">
                <input type="radio" name="q27" value="1">
                <input type="radio" name="q27" value="2">
                <input type="radio" name="q27" value="3">
                <input type="radio" name="q27" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 28. 다른 사람들과 쉽게 친해질 수 있다.</th>
            <td class="selection-5">
                <input type="radio" name="q28" value="0">
                <input type="radio" name="q28" value="1">
                <input type="radio" name="q28" value="2">
                <input type="radio" name="q28" value="3">
                <input type="radio" name="q28" value="4">
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class="btn-container">
    <a href="#" class="action-button shadow animate blue">사회불안 자가진단 결과보기</a>
</div>

<div class="container clsShowHide" id="diagnosis1">
    <h2>자가진단 결과보기</h2>
    <h4>0 ~ 35점</h4>
    <p>사회적 관계에서 그다지 불편감과 불안을 느끼지 않습니다.</p>
</div>

<div class="container clsShowHide" id="diagnosis2">
    <h2>자가진단 결과보기</h2>
    <h4>36 ~ 70점</h4>
    <p>사회적 관계에서 중간 정도의 불안을 경험하고 있으며, 때로는 불편한 상황을 회피하 기도 합니다. 그러나 그 정도는 그렇게까지 문제되지 않습니다.</p>
</div>

<div class="container clsShowHide" id="diagnosis3">
    <h2>자가진단 결과보기</h2>
    <h4>71 ~ 87점</h4>
    <p>사회적 관계에서 상당한 정도로 불편감과 불안을 경험하고 있으며, 사회공포증일 가능성도 있습니다. 사회적 관계에서의 불편감이 지속되면 전문가를 찾아 상담할 것을 권합니다.</p>
</div>

<div class="container clsShowHide" id="diagnosis4">
    <h2>자가진단 결과보기</h2>
    <h4>88 ~ 112점</h4>
    <p>심한 정도의 사회불안을 경험하면서, 여러 상황들을 회피하고 있으며, 이것이 스스로의 삶을 힘들게 하고 있습니다. 조속한 시일내에 전문가를 통해 상담받을 것을 권합니다.</p>
</div>