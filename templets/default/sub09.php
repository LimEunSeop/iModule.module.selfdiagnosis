<?php
/**
 * 이 파일은 iModule Selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * Selfdiagnosis 인터넷중독 자가진단 템플릿
 * 
 * @file /modules/selfdiagnosis/templets/default/sub10.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license MIT License
 * @version 0.0.1
 * @modified 2018. 7. 23.
 */
if (defined('__IM__') == false) exit;
?>
<br><br><h1>인터넷중독</h1><br>
<p>
    다음 문항을 읽어보시고 <b>요즈음 자신의 상태에 가장 적합하다고 생각되는 정도</b>에 체크하십시오.
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
            <th><span class="list-icon"></span>  1. 처음에 마음먹었던 것보다 더 오래 인터넷을<br>
                <span class="indent-one">하게 된다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q1' value='1' id='q10'><label for='q10'>예</label>
                <input type='radio' name='q1' value='0' id='q11'><label for='q11'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  2. 인터넷으로 시간을 보내느라 다른 해야 할 일을<br>
                <span class="indent-one">소홀히 한다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q2' value='1' id='q20'><label for='q20'>예</label>
                <input type='radio' name='q2' value='0' id='q21'><label for='q21'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  3. 가장 친한 친구와 노는 것보다 인터넷 하는 것을<br>
                <span class="indent-one">더 좋아한다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q3' value='1' id='q30'><label for='q30'>예</label>
                <input type='radio' name='q3' value='0' id='q31'><label for='q31'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  4. 인터넷을 통해 새로운 사람을 사귄다.</th>
            <td class="selection-yn">
                <input type='radio' name='q4' value='1' id='q40'><label for='q40'>예</label>
                <input type='radio' name='q4' value='0' id='q41'><label for='q41'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  5. 인터넷으로 많은 시간을 보내는 것에 대해 가까운<br>
                <span class="indent-one">사람들이 불평한다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q5' value='1' id='q50'><label for='q50'>예</label>
                <input type='radio' name='q5' value='0' id='q51'><label for='q51'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  6. 인터넷으로 많은 시간을 보내기 때문에 성적이나<br>
                <span class="indent-one">학교 수업에 지장을 받는다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q6' value='1' id='q60'><label for='q60'>예</label>
                <input type='radio' name='q6' value='0' id='q61'><label for='q61'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  7. 공부나 해야 할 일을 하기 전에 e-메일부터<br>
                <span class="indent-one">먼저 확인한다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q7' value='1' id='q70'><label for='q70'>예</label>
                <input type='radio' name='q7' value='0' id='q71'><label for='q71'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  8. 인터넷 때문에 학습 능률이 떨어진다.</th>
            <td class="selection-yn">
                <input type='radio' name='q8' value='1' id='q80'><label for='q80'>예</label>
                <input type='radio' name='q8' value='0' id='q81'><label for='q81'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  9. 다른 사람이 인터넷으로 무엇을 하느냐고 물어볼 때<br>
                <span class="indent-one">숨긴다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q9' value='1' id='q90'><label for='q90'>예</label>
                <input type='radio' name='q9' value='0' id='q91'><label for='q91'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  10. 현실의 골치 아픈 생각을 잊기 위해 인터넷을<br>
                <span class="indent-two">하게 된다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q10' value='1' id='q100'><label for='q100'>예</label>
                <input type='radio' name='q10' value='0' id='q101'><label for='q101'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  11. 다시 인터넷 하기를 기대하는 자신을 발견한다.</th>
            <td class="selection-yn">
                <input type='radio' name='q11' value='1' id='q110'><label for='q110'>예</label>
                <input type='radio' name='q11' value='0' id='q111'><label for='q111'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  12. 인터넷이 없다면 생활이 지루하고, 허전하며,<br>
                <span class="indent-two">기쁨이 없을 것이라고 걱정한다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q12' value='1' id='q120'><label for='q120'>예</label>
                <input type='radio' name='q12' value='0' id='q121'><label for='q121'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  13. 인터넷 접속 중에 다른 사람이 방해하면 소리지르고<br>
                <span class="indent-two">고함치고 막 화를 낸다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q13' value='1' id='q130'><label for='q130'>예</label>
                <input type='radio' name='q13' value='0' id='q131'><label for='q131'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  14. 밤 늦게까지 인터넷을 하느라 잠을 못 잔다.</th>
            <td class="selection-yn">
                <input type='radio' name='q14' value='1' id='q140'><label for='q140'>예</label>
                <input type='radio' name='q14' value='0' id='q141'><label for='q141'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  15. 인터넷을 하지 않을 때에도, 인터넷에 대한 생각으로<br>
                <span class="indent-two">꽉 차 있거나 접속하는 것을 상상한다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q15' value='1' id='q150'><label for='q150'>예</label>
                <input type='radio' name='q15' value='0' id='q151'><label for='q151'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  16. 인터넷을 할 때 “조금만 더하고 그만 두어야지” 라고<br>
                <span class="indent-two">생각하면서도 계속한다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q16' value='1' id='q160'><label for='q160'>예</label>
                <input type='radio' name='q16' value='0' id='q161'><label for='q161'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  17. 인터넷을 하는 시간을 줄이려고 노력하지만<br>
                <span class="indent-two">실패한다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q17' value='1' id='q170'><label for='q170'>예</label>
                <input type='radio' name='q17' value='0' id='q171'><label for='q171'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  18. 인터넷을 얼마나 오래 했는지 숨기려고 한다.</th>
            <td class="selection-yn">
                <input type='radio' name='q18' value='1' id='q180'><label for='q180'>예</label>
                <input type='radio' name='q18' value='0' id='q181'><label for='q181'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  19. 남들과 밖에서 놀기보다는 인터넷으로 시간<br>
                <span class="indent-two">보내는 걸 택한다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q19' value='1' id='q190'><label for='q190'>예</label>
                <input type='radio' name='q19' value='0' id='q191'><label for='q191'>아니오</label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  20. 인터넷을 하지 않을 때는 우울하고 울적해지거나<br>
                <span class="indent-two">신경이 날카롭다가도, 인터넷을 하게 되면 그런</span><br>
                <span class="indent-two">기분이 사라진다.</span></th>
            <td class="selection-yn">
                <input type='radio' name='q20' value='1' id='q200'><label for='q200'>예</label>
                <input type='radio' name='q20' value='0' id='q201'><label for='q201'>아니오</label>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class="btn-container">
    <a href="#" class="action-button shadow animate blue">인터넷중독 자가진단 결과보기</a>
</div>

<div class="resultbox">
    <div class="container clsShowHide" id="diagnosis1">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 0 ~ 9점</h4>
        <p>정상적으로 인터넷을 사용하고 있으며, 그다지 문제가 나타나지 않습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis2">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 10 ~ 15점</h4>
        <p>인터넷을 과도하게 사용하며, 때때로 상당한 문제가 나타납니다. 인터넷 사용을 줄이도록 노력해야 하며, 되지 않을 때는 전문가에게 상담을 받을 필요가 있습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis3">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 16점 이상</h4>
        <p>인터넷 중독입니다. 인터넷을 심하게 사용하며, 생활전반에 걸쳐 많은 문제가 나타납니다. 전문가의 상담을 받을 필요가 있습니다.</p>
    </div>
</div>