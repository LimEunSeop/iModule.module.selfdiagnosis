<?php
/**
 * 이 파일은 iModule Selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * Selfdiagnosis 사랑유형 자가진단 템플릿
 * 
 * @file /modules/selfdiagnosis/templets/default/sub11.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license MIT License
 * @version 0.0.1
 * @modified 2018. 7. 23.
 */
if (defined('__IM__') == false) exit;
?>
<br><br><h1>사랑유형</h1><br>
<p>
    <b>어떤것을 사랑이라고 생각하십니까?</b> 현재 하고 있는 사랑이나 과거에 했던 사랑을 생각해 보십시오. 그러한 경험이 없다면 귀하가 생각하는 사랑에 대해서 답하면 됩니다. <b>나의 의식속에 있는 사랑 유형을 확인할 수 있습니다.</b>
</p>
<div class="container">
    <table class="selection-screen">
        <thead>
            <th></th>
            <th>
                <ul class="degree-yn">
                    <li>예</li>
                    <li>아니오</li>
                </ul>
            </th>
        </thead>
        
        <tbody>
        <tr>
            <th><span class="list-icon"></span>  1. 나는 ‘첫눈에 반한다’는 것이 가능하다고 생각한다.</th>
            <td class="selection-yn">
                <input type='radio' name='q1' value='1' id='q10'><label for='q10'>예</label>
                <input type='radio' name='q1' value='0' id='q11'><label for='q11'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  2. 나는 한참 지난 후에야 비로소 내가 사랑하고 있다는<br>
                <span class="indent-one">것을 알았다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q2' value='1' id='q20'><label for='q20'>예</label>
                <input type='radio' name='q2' value='0' id='q21'><label for='q21'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  3. 우리 사이의 일이 잘 풀리지 않으면 나는 소화가<br>
                <span class="indent-one">잘 되지 않는다.<span></th>
            <td class="selection-yn">
                <input type='radio' name='q3' value='1' id='q30'><label for='q30'>예</label>
                <input type='radio' name='q3' value='0' id='q31'><label for='q31'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  4. 사랑을 고백하기 전에 먼저 나의 장래 목표부터<br>
                <span class="indent-one">생각해 보아야 한다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q4' value='1' id='q40'><label for='q40'>예</label>
                <input type='radio' name='q4' value='0' id='q41'><label for='q41'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  5. 좋아하는 마음이 얼마 동안 있은 후에야 사랑하는<br>
                <span class="indent-one">마음이 생기는 것이 원칙이다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q5' value='1' id='q50'><label for='q50'>예</label>
                <input type='radio' name='q5' value='0' id='q51'><label for='q51'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  6. 애인에게 자신의 태도를 다소 불확실하게 해두는<br>
                <span class="indent-one">것이 좋다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q6' value='1' id='q60'><label for='q60'>예</label>
                <input type='radio' name='q6' value='0' id='q61'><label for='q61'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  7. 애인을 결정하기 전에 인생설계부터 잘해두는<br>
                <span class="indent-one">것이 좋다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q7' value='1' id='q70'><label for='q70'>예</label>
                <input type='radio' name='q7' value='0' id='q71'><label for='q71'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  8. 애인이 어려운 처지에 있으면 설사 그(혹은 그녀)가<br>
                <span class="indent-one">바보 같은 행동을 하더라도 힘껏 도와주려고 한다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q8' value='1' id='q80'><label for='q80'>예</label>
                <input type='radio' name='q8' value='0' id='q81'><label for='q81'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  9. 애인을 고통 받게 하기 보다는 차라리 내가 받겠다</th>
            <td class="selection-yn">
                <input type='radio' name='q9' value='1' id='q90'><label for='q90'>예</label>
                <input type='radio' name='q9' value='0' id='q91'><label for='q91'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  10. 비슷한 배경을 가진 사람끼리 사랑하는 것이<br>
                <span class="indent-two">가장 좋다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q10' value='1' id='q100'><label for='q100'>예</label>
                <input type='radio' name='q10' value='0' id='q101'><label for='q101'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  11. 애인이 나에게 관심을 보이지 않으면 온 몸이 쑤시고<br>
                <span class="indent-two">아프곤 한다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q11' value='1' id='q110'><label for='q110'>예</label>
                <input type='radio' name='q11' value='0' id='q111'><label for='q111'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  12. 대개 제일 먼저 나의 주의를 끄는 것은 그 사람의<br>
                <span class="indent-two">외모이다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q12' value='1' id='q120'><label for='q120'>예</label>
                <input type='radio' name='q12' value='0' id='q121'><label for='q121'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  13. 최상의 사랑은 오랜 기간의 우정으로부터 싹튼다.</th>
            <td class="selection-yn">
                <input type='radio' name='q13' value='1' id='q130'><label for='q130'>예</label>
                <input type='radio' name='q13' value='0' id='q131'><label for='q131'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  14. 사랑에 빠지면 도무지 다른 일에는 정신을<br>
                <span class="indent-two">집중하기가 힘들다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q14' value='1' id='q140'><label for='q140'>예</label>
                <input type='radio' name='q14' value='0' id='q141'><label for='q141'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  15. 그의 손을 잡았을 때 나는 사랑의 가능성을<br>
                <span class="indent-two">감지했다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q15' value='1' id='q150'><label for='q150'>예</label>
                <input type='radio' name='q15' value='0' id='q151'><label for='q151'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  16. 애인이 다른 사람하고 같이 있다는 생각이 들면<br>
                <span class="indent-two">견딜 수가 없다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q16' value='1' id='q160'><label for='q160'>예</label>
                <input type='radio' name='q16' value='0' id='q161'><label for='q161'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  17. 나는 나의 애인 두 사람이 서로 알지 못하도록<br>
                <span class="indent-two">교묘하게 재주부린 적이 적어도 한번은 있다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q17' value='1' id='q170'><label for='q170'>예</label>
                <input type='radio' name='q17' value='0' id='q171'><label for='q171'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  18. 나는 매우 쉽고 빠르게 사랑하던 관계를 잊어버릴<br>
                <span class="indent-two">수 있다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q18' value='1' id='q180'><label for='q180'>예</label>
                <input type='radio' name='q18' value='0' id='q181'><label for='q181'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  19. 애인이 원하는 것을 위해서라면 나는 기꺼이 내가<br>
                <span class="indent-two">원하는 것을 희생시킬 수 있다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q19' value='1' id='q190'><label for='q190'>예</label>
                <input type='radio' name='q19' value='0' id='q191'><label for='q191'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  20. 키스, 포옹, 성관계는 서둘러서는 안 된다. 그것들은<br>
                <span class="indent-two">서로 충분히 친해지면 자연스럽게 이루어지는</span><br>
                <span class="indent-two">것이다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q20' value='1' id='q200'><label for='q200'>예</label>
                <input type='radio' name='q20' value='0' id='q201'><label for='q201'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  21. 나는 매력적인 사람들과 바람 피우는 것을 좋아한다.</th>
            <td class="selection-yn">
                <input type='radio' name='q21' value='1' id='q210'><label for='q210'>예</label>
                <input type='radio' name='q21' value='0' id='q211'><label for='q211'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  22. 연애를 시작하기 전부터 애인이 될 사람의 모습을<br>
                <span class="indent-two">분명히 정해 놓고 있다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q22' value='1' id='q220'><label for='q220'>예</label>
                <input type='radio' name='q22' value='0' id='q221'><label for='q221'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  23. 우리가 언제부터 서로 사랑하게 되었는지 정확히<br>
                <span class="indent-two">알 수 없다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q23' value='1' id='q230'><label for='q230'>예</label>
                <input type='radio' name='q23' value='0' id='q231'><label for='q231'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  24. 결혼하지 않을 사람하고는 진정한 사랑을 할 수<br>
                <span class="indent-two">없을 것 같다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q24' value='1' id='q240'><label for='q240'>예</label>
                <input type='radio' name='q24' value='0' id='q241'><label for='q241'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  25. 내가 애인에게 방해가 된다면, 차라리 나는 그만<br>
                <span class="indent-two">두겠다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q25' value='1' id='q250'><label for='q250'>예</label>
                <input type='radio' name='q25' value='0' id='q251'><label for='q251'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  26. 나는 애인의 것과 똑같은 옷, 모자, 자전거, 자동차<br>
                <span class="indent-two">등을 갖고 싶다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q26' value='1' id='q260'><label for='q260'>예</label>
                <input type='radio' name='q26' value='0' id='q261'><label for='q261'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  27. 내가 가지고 있는 것은 무엇이든지 나의 애인이<br>
                <span class="indent-two">마음대로 써도 좋다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q27' value='1' id='q270'><label for='q270'>예</label>
                <input type='radio' name='q27' value='0' id='q271'><label for='q271'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  28. 애인이 잠시라도 나에게 무관심해지면, 나는 그의<br>
                <span class="indent-two">관심을 끌기 위해 때로는 정말 바보 같은 짓을 할</span><br>
                <span class="indent-two">때도 있다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q28' value='1' id='q280'><label for='q280'>예</label>
                <input type='radio' name='q28' value='0' id='q281'><label for='q281'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  29. 깊이 사귀고 싶지 않더라도 어떤 상대가 나의<br>
                <span class="indent-two">데이트 신청에 응하는지를 시험해보는 것은</span><br>
                <span class="indent-two">재미있을 것 같다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q29' value='1' id='q290'><label for='q290'>예</label>
                <input type='radio' name='q29' value='0' id='q291'><label for='q291'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  30. 배우자를 결정하는데 있어 가장 먼저 고려해야 할<br>
                <span class="indent-two">점은 그가 좋은 부모가 될 수 있는가 여부이다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q30' value='1' id='q300'><label for='q300'>예</label>
                <input type='radio' name='q30' value='0' id='q301'><label for='q301'>아니오</label>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class="btn-container">
    <a href="#" class="action-button shadow animate blue">사랑유형 자가진단 결과보기</a>
</div>

<div class="resultbox">
    <div class="container clsShowHide" id="diagnosis1">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 좋은 친구 같은 사랑 유형입니다.</h4>
        <p>오랫동안 함께 지내오다가 사랑하는 관계로 발전된 경우입니다. 서로 친구이자 애인입니다. 화끈하고 낭만적인 면은 두드러지지 않으나, 은근하고 정다우며 서로를 진심으로 원합니다. 갈등이 생기는 경우는 서로 양보하고 합리적인 해결을 위해 타협합니다. 관계가 깨져도 우정은 계속 남아 있는 경우가 많습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis2">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 이타적 사랑 유형입니다.</h4>
        <p>조건 없이 좋아하고 돌보아 주며, 용서하고 베풀어주는 자기 희생적 사랑, 아가페적 사랑, 무조건적 사랑, 관음보살의 대자대비적 사랑이 이에 속합니다. 상대방이 자기를 얼마나 필요로 하는 가가 사랑의 조건이기 때문에 상대방이 자신의 사랑을 필요로 하지 않는다는 확신이 들면 사랑의 관계는 보통 끝납니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis3">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 논리적 사랑 유형입니다.</h4>
        <p>현명하게 사랑을 하고자 하는 유형입니다. “나는 내가 생각하는 남편과 아버지(혹은 아내와 어머니)의 조건을 만족시키지 못하는 사람하고는 결코 연애를 하지 않을 것이다”라는 태도를 갖고 있습니다. 또한 배우자의 외모, 교육수준, 가정배경 및 성격 등에 관하여 구체적인 기준을 정해놓고 있을 뿐만 아니라 자기자신의 장점과 약점까지도 충분히 고려하고 있습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis4">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 소유적 사랑 유형입니다.</h4>
        <p>사랑이란 상대방을 완전히 소유하는 것이라고 생각하는 동시에 상대방으로부터 내가 소유 당하는 것이라고 생각하고 있습니다. 이 사랑을 하면 흥분과 깊은 절망, 헌신과 불 같은 질투의 두 가지 양극단의 감정을 경험할 수 있고, 한시도 마음이 편하지 못합니다. 완전한 사랑의 노예가 되어 버려 상대방의 사랑을 확인하는 일로 모든 시간과 정력을 소모할 수 있으며, 혹시 버림받지 않을까 하는 불안으로 내내 마음을 졸일 수 있습니다. 이러한 경우에는 자신의 사랑관계에 대하여 다시 더 생각하고 정리할 필요가 있으며, 필요 시에는 전문가의 도움을 구하십시오.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis5">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 낭만적 사랑 유형입니다.</h4>
        <p>상대를 보자 마자 강한 전류에 감전된 것처럼 열정이 솟아나는 경험을 하고, 첫눈에 금방 황홀한 사랑에 빠질 뿐만 아니라 한 순간의 이별도 견딜 수 없어 합니다. 이러한 사랑을 경험하는 데는 특히 상대방의 외모가 중요한 요인으로 작용합니다. 한마디로 동화 속 주인공들의 사랑방식이라 할 수 있고, 이러한 사랑을 꿈꾸는 사람은 자신도 동화 속 주인공처럼 살기를 바랍니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis6">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 유희적 사랑 유형입니다.</h4>
        <p>사랑이란 즐기기 위한 도전이며, 이기기 위한 시합이라고 생각합니다. 사랑의 약속 같은 것은 하지 않으며, 동시에 두 사람 혹은 그 이상의 애인들과 사랑을 나누는 것이 예사입니다. 사랑의 대상이 한 사람에서 다른 사람으로 쉽게 옮겨가며, 어느 한 사람과 심각한 사랑의 관계에 빠지거나 특별히 흥분하지도 않습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis7">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 미결정형 일수 있습니다.</h4>
    </div>
</div>