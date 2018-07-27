<?php
/**
 * 이 파일은 iModule Selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * Selfdiagnosis 발표불안 자가진단 템플릿
 * 
 * @file /modules/selfdiagnosis/templets/default/sub04.php
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
            <th><span class="list-icon"></span>  1. 대중 앞에서 발표할 기회를 즐거운 마음으로<br>
                <span class="indent-one">기다린다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q1' value='0' id='q10'><label for='q10'>전혀 아니다<br></label>
                <input type='radio' name='q1' value='1' id='q11'><label for='q11'>약간 그렇다<br></label>
                <input type='radio' name='q1' value='2' id='q12'><label for='q12'>웬만큼 그렇다<br></label>
                <input type='radio' name='q1' value='3' id='q13'><label for='q13'>상당히 그렇다<br></label>
                <input type='radio' name='q1' value='4' id='q14'><label for='q14'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  2. 연단 위에 있는 물건들을 만지려고 할 때 손이<br>
                <span class="indent-one">떨린다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q2' value='0' id='q20'><label for='q20'>전혀 아니다<br></label>
                <input type='radio' name='q2' value='1' id='q21'><label for='q21'>약간 그렇다<br></label>
                <input type='radio' name='q2' value='2' id='q22'><label for='q22'>웬만큼 그렇다<br></label>
                <input type='radio' name='q2' value='3' id='q23'><label for='q23'>상당히 그렇다<br></label>
                <input type='radio' name='q2' value='4' id='q24'><label for='q24'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  3. 발표할 내용을 잊어버릴까 봐 두렵다.</th>
            <td class="selection-5">
                <input type='radio' name='q3' value='0' id='q30'><label for='q30'>전혀 아니다<br></label>
                <input type='radio' name='q3' value='1' id='q31'><label for='q31'>약간 그렇다<br></label>
                <input type='radio' name='q3' value='2' id='q32'><label for='q32'>웬만큼 그렇다<br></label>
                <input type='radio' name='q3' value='3' id='q33'><label for='q33'>상당히 그렇다<br></label>
                <input type='radio' name='q3' value='4' id='q34'><label for='q34'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  4. 내가 청중들에게 말할 때 그들이 우호적인 것으로<br>
                <span class="indent-one">보인다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q4' value='0' id='q40'><label for='q40'>전혀 아니다<br></label>
                <input type='radio' name='q4' value='1' id='q41'><label for='q41'>약간 그렇다<br></label>
                <input type='radio' name='q4' value='2' id='q42'><label for='q42'>웬만큼 그렇다<br></label>
                <input type='radio' name='q4' value='3' id='q43'><label for='q43'>상당히 그렇다<br></label>
                <input type='radio' name='q4' value='4' id='q44'><label for='q44'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  5. 발표 준비를 하는 동안, 나는 불안하다.</th>
            <td class="selection-5">
                <input type='radio' name='q5' value='0' id='q50'><label for='q50'>전혀 아니다<br></label>
                <input type='radio' name='q5' value='1' id='q51'><label for='q51'>약간 그렇다<br></label>
                <input type='radio' name='q5' value='2' id='q52'><label for='q52'>웬만큼 그렇다<br></label>
                <input type='radio' name='q5' value='3' id='q53'><label for='q53'>상당히 그렇다<br></label>
                <input type='radio' name='q5' value='4' id='q54'><label for='q54'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  6. 발표를 끝낼 때, 나는 즐거운 경험을 했다고 느낀다.</th>
            <td class="selection-5">
                <input type='radio' name='q6' value='0' id='q60'><label for='q60'>전혀 아니다<br></label>
                <input type='radio' name='q6' value='1' id='q61'><label for='q61'>약간 그렇다<br></label>
                <input type='radio' name='q6' value='2' id='q62'><label for='q62'>웬만큼 그렇다<br></label>
                <input type='radio' name='q6' value='3' id='q63'><label for='q63'>상당히 그렇다<br></label>
                <input type='radio' name='q6' value='4' id='q64'><label for='q64'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  7. 나는 몸동작을 많이 사용하거나 목소리를 표현력<br>
                <span class="indent-one">있게 내는 것을 싫어한다.<span></th>
            <td class="selection-5">
                <input type='radio' name='q7' value='0' id='q70'><label for='q70'>전혀 아니다<br></label>
                <input type='radio' name='q7' value='1' id='q71'><label for='q71'>약간 그렇다<br></label>
                <input type='radio' name='q7' value='2' id='q72'><label for='q72'>웬만큼 그렇다<br></label>
                <input type='radio' name='q7' value='3' id='q73'><label for='q73'>상당히 그렇다<br></label>
                <input type='radio' name='q7' value='4' id='q74'><label for='q74'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  8. 나는 청중 앞에서 발표할 때, 생각이 혼란되고<br>
                <span class="indent-one">뒤죽박죽 된다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q8' value='0' id='q80'><label for='q80'>전혀 아니다<br></label>
                <input type='radio' name='q8' value='1' id='q81'><label for='q81'>약간 그렇다<br></label>
                <input type='radio' name='q8' value='2' id='q82'><label for='q82'>웬만큼 그렇다<br></label>
                <input type='radio' name='q8' value='3' id='q83'><label for='q83'>상당히 그렇다<br></label>
                <input type='radio' name='q8' value='4' id='q84'><label for='q84'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  9. 청중들을 대하는 것이 두렵지 않다.</th>
            <td class="selection-5">
                <input type='radio' name='q9' value='0' id='q90'><label for='q90'>전혀 아니다<br></label>
                <input type='radio' name='q9' value='1' id='q91'><label for='q91'>약간 그렇다<br></label>
                <input type='radio' name='q9' value='2' id='q92'><label for='q92'>웬만큼 그렇다<br></label>
                <input type='radio' name='q9' value='3' id='q93'><label for='q93'>상당히 그렇다<br></label>
                <input type='radio' name='q9' value='4' id='q94'><label for='q94'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  10. 발표하기 직전에는 신경이 예민해지지만, 금방<br>
                <span class="indent-two">두려움을 잊고 그 경험을 즐긴다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q10' value='0' id='q100'><label for='q100'>전혀 아니다<br></label>
                <input type='radio' name='q10' value='1' id='q101'><label for='q101'>약간 그렇다<br></label>
                <input type='radio' name='q10' value='2' id='q102'><label for='q102'>웬만큼 그렇다<br></label>
                <input type='radio' name='q10' value='3' id='q103'><label for='q103'>상당히 그렇다<br></label>
                <input type='radio' name='q10' value='4' id='q104'><label for='q104'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  11. 나는 아주 자신 있게 발표할 것이라고 예상한다.</th>
            <td class="selection-5">
                <input type='radio' name='q11' value='0' id='q110'><label for='q110'>전혀 아니다<br></label>
                <input type='radio' name='q11' value='1' id='q111'><label for='q111'>약간 그렇다<br></label>
                <input type='radio' name='q11' value='2' id='q112'><label for='q112'>웬만큼 그렇다<br></label>
                <input type='radio' name='q11' value='3' id='q113'><label for='q113'>상당히 그렇다<br></label>
                <input type='radio' name='q11' value='4' id='q114'><label for='q114'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  12. 발표를 하는 동안 나는 아주 침착하다고 느낀다.</th>
            <td class="selection-5">
                <input type='radio' name='q12' value='0' id='q120'><label for='q120'>전혀 아니다<br></label>
                <input type='radio' name='q12' value='1' id='q121'><label for='q121'>약간 그렇다<br></label>
                <input type='radio' name='q12' value='2' id='q122'><label for='q122'>웬만큼 그렇다<br></label>
                <input type='radio' name='q12' value='3' id='q123'><label for='q123'>상당히 그렇다<br></label>
                <input type='radio' name='q12' value='4' id='q124'><label for='q124'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  13. 나는 친구들과는 유창하게 말하지만, 연단 위에<br>
                <span class="indent-two">서면 할 말이 생각나지 않는다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q13' value='0' id='q130'><label for='q130'>전혀 아니다<br></label>
                <input type='radio' name='q13' value='1' id='q131'><label for='q131'>약간 그렇다<br></label>
                <input type='radio' name='q13' value='2' id='q132'><label for='q132'>웬만큼 그렇다<br></label>
                <input type='radio' name='q13' value='3' id='q133'><label for='q133'>상당히 그렇다<br></label>
                <input type='radio' name='q13' value='4' id='q134'><label for='q134'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  14. 발표를 하는 동안 나는 긴장되지 않고 편안하게<br>
                <span class="indent-two">느낀다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q14' value='0' id='q140'><label for='q140'>전혀 아니다<br></label>
                <input type='radio' name='q14' value='1' id='q141'><label for='q141'>약간 그렇다<br></label>
                <input type='radio' name='q14' value='2' id='q142'><label for='q142'>웬만큼 그렇다<br></label>
                <input type='radio' name='q14' value='3' id='q143'><label for='q143'>상당히 그렇다<br></label>
                <input type='radio' name='q14' value='4' id='q144'><label for='q144'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  15. 나는 대중 앞에서 발표하는 것을 즐기지도 않지만,<br>
                <span class="indent-two">특별히 두려워하지도 않는다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q15' value='0' id='q150'><label for='q150'>전혀 아니다<br></label>
                <input type='radio' name='q15' value='1' id='q151'><label for='q151'>약간 그렇다<br></label>
                <input type='radio' name='q15' value='2' id='q152'><label for='q152'>웬만큼 그렇다<br></label>
                <input type='radio' name='q15' value='3' id='q153'><label for='q153'>상당히 그렇다<br></label>
                <input type='radio' name='q15' value='4' id='q154'><label for='q154'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  16. 가능하다면 대중 앞에서 발표하는 것을 피한다.</th>
            <td class="selection-5">
                <input type='radio' name='q16' value='0' id='q160'><label for='q160'>전혀 아니다<br></label>
                <input type='radio' name='q16' value='1' id='q161'><label for='q161'>약간 그렇다<br></label>
                <input type='radio' name='q16' value='2' id='q162'><label for='q162'>웬만큼 그렇다<br></label>
                <input type='radio' name='q16' value='3' id='q163'><label for='q163'>상당히 그렇다<br></label>
                <input type='radio' name='q16' value='4' id='q164'><label for='q164'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  17. 청중들을 쳐다볼 때 그들의 얼굴이 흐릿하게<br>
                <span class="indent-two">보인다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q17' value='0' id='q170'><label for='q170'>전혀 아니다<br></label>
                <input type='radio' name='q17' value='1' id='q171'><label for='q171'>약간 그렇다<br></label>
                <input type='radio' name='q17' value='2' id='q172'><label for='q172'>웬만큼 그렇다<br></label>
                <input type='radio' name='q17' value='3' id='q173'><label for='q173'>상당히 그렇다<br></label>
                <input type='radio' name='q17' value='4' id='q174'><label for='q174'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  18. 여러 사람들 앞에서 발표하려고 애쓴 후에는 내<br>
                <span class="indent-two">자신이 싫어진다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q18' value='0' id='q180'><label for='q180'>전혀 아니다<br></label>
                <input type='radio' name='q18' value='1' id='q181'><label for='q181'>약간 그렇다<br></label>
                <input type='radio' name='q18' value='2' id='q182'><label for='q182'>웬만큼 그렇다<br></label>
                <input type='radio' name='q18' value='3' id='q183'><label for='q183'>상당히 그렇다<br></label>
                <input type='radio' name='q18' value='4' id='q184'><label for='q184'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  19. 나는 발표 준비하는 것을 즐긴다.</th>
            <td class="selection-5">
                <input type='radio' name='q19' value='0' id='q190'><label for='q190'>전혀 아니다<br></label>
                <input type='radio' name='q19' value='1' id='q191'><label for='q191'>약간 그렇다<br></label>
                <input type='radio' name='q19' value='2' id='q192'><label for='q192'>웬만큼 그렇다<br></label>
                <input type='radio' name='q19' value='3' id='q193'><label for='q193'>상당히 그렇다<br></label>
                <input type='radio' name='q19' value='4' id='q194'><label for='q194'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  20. 나는 청중을 대할 때 정신이 또렷해진다.</th>
            <td class="selection-5">
                <input type='radio' name='q20' value='0' id='q200'><label for='q200'>전혀 아니다<br></label>
                <input type='radio' name='q20' value='1' id='q201'><label for='q201'>약간 그렇다<br></label>
                <input type='radio' name='q20' value='2' id='q202'><label for='q202'>웬만큼 그렇다<br></label>
                <input type='radio' name='q20' value='3' id='q203'><label for='q203'>상당히 그렇다<br></label>
                <input type='radio' name='q20' value='4' id='q204'><label for='q204'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  21. 나는 발표할 때 말을 잘 한다.</th>
            <td class="selection-5">
                <input type='radio' name='q21' value='0' id='q210'><label for='q210'>전혀 아니다<br></label>
                <input type='radio' name='q21' value='1' id='q211'><label for='q211'>약간 그렇다<br></label>
                <input type='radio' name='q21' value='2' id='q212'><label for='q212'>웬만큼 그렇다<br></label>
                <input type='radio' name='q21' value='3' id='q213'><label for='q213'>상당히 그렇다<br></label>
                <input type='radio' name='q21' value='4' id='q214'><label for='q214'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  22. 나는 발표하러 일어서기 직전에 땀이 나고 떨린다.</th>
            <td class="selection-5">
                <input type='radio' name='q22' value='0' id='q220'><label for='q220'>전혀 아니다<br></label>
                <input type='radio' name='q22' value='1' id='q221'><label for='q221'>약간 그렇다<br></label>
                <input type='radio' name='q22' value='2' id='q222'><label for='q222'>웬만큼 그렇다<br></label>
                <input type='radio' name='q22' value='3' id='q223'><label for='q223'>상당히 그렇다<br></label>
                <input type='radio' name='q22' value='4' id='q224'><label for='q224'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  23. 내 자세가 긴장되고 부자연스럽게 느껴진다.</th>
            <td class="selection-5">
                <input type='radio' name='q23' value='0' id='q230'><label for='q230'>전혀 아니다<br></label>
                <input type='radio' name='q23' value='1' id='q231'><label for='q231'>약간 그렇다<br></label>
                <input type='radio' name='q23' value='2' id='q232'><label for='q232'>웬만큼 그렇다<br></label>
                <input type='radio' name='q23' value='3' id='q233'><label for='q233'>상당히 그렇다<br></label>
                <input type='radio' name='q23' value='4' id='q234'><label for='q234'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  24. 여러 사람들 앞에서 발표하는 동안 나는 두렵고<br>
                <span class="indent-two">긴장된다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q24' value='0' id='q240'><label for='q240'>전혀 아니다<br></label>
                <input type='radio' name='q24' value='1' id='q241'><label for='q241'>약간 그렇다<br></label>
                <input type='radio' name='q24' value='2' id='q242'><label for='q242'>웬만큼 그렇다<br></label>
                <input type='radio' name='q24' value='3' id='q243'><label for='q243'>상당히 그렇다<br></label>
                <input type='radio' name='q24' value='4' id='q244'><label for='q244'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  25. 발표할 기회는 즐겁다고 생각한다.</th>
            <td class="selection-5">
                <input type='radio' name='q25' value='0' id='q250'><label for='q250'>전혀 아니다<br></label>
                <input type='radio' name='q25' value='1' id='q251'><label for='q251'>약간 그렇다<br></label>
                <input type='radio' name='q25' value='2' id='q252'><label for='q252'>웬만큼 그렇다<br></label>
                <input type='radio' name='q25' value='3' id='q253'><label for='q253'>상당히 그렇다<br></label>
                <input type='radio' name='q25' value='4' id='q254'><label for='q254'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  26. 내 생각을 표현할 정확한 말들을 차분하게 찾기가<br>
                <span class="indent-two">어렵다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q26' value='0' id='q260'><label for='q260'>전혀 아니다<br></label>
                <input type='radio' name='q26' value='1' id='q261'><label for='q261'>약간 그렇다<br></label>
                <input type='radio' name='q26' value='2' id='q262'><label for='q262'>웬만큼 그렇다<br></label>
                <input type='radio' name='q26' value='3' id='q263'><label for='q263'>상당히 그렇다<br></label>
                <input type='radio' name='q26' value='4' id='q264'><label for='q264'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  27. 대중 앞에서 발표한다고 생각하면 겁난다.</th>
            <td class="selection-5">
                <input type='radio' name='q27' value='0' id='q270'><label for='q270'>전혀 아니다<br></label>
                <input type='radio' name='q27' value='1' id='q271'><label for='q271'>약간 그렇다<br></label>
                <input type='radio' name='q27' value='2' id='q272'><label for='q272'>웬만큼 그렇다<br></label>
                <input type='radio' name='q27' value='3' id='q273'><label for='q273'>상당히 그렇다<br></label>
                <input type='radio' name='q27' value='4' id='q274'><label for='q274'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  28. 나는 청중 앞에 서면 정신이 맑아지는 느낌이 든다.</th>
            <td class="selection-5">
                <input type='radio' name='q28' value='0' id='q280'><label for='q280'>전혀 아니다<br></label>
                <input type='radio' name='q28' value='1' id='q281'><label for='q281'>약간 그렇다<br></label>
                <input type='radio' name='q28' value='2' id='q282'><label for='q282'>웬만큼 그렇다<br></label>
                <input type='radio' name='q28' value='3' id='q283'><label for='q283'>상당히 그렇다<br></label>
                <input type='radio' name='q28' value='4' id='q284'><label for='q284'>매우 그렇다<br></label>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class="btn-container">
    <a href="#" class="action-button shadow animate blue">발표불안 자가진단 결과보기</a>
</div>

<div class="resultbox">
    <div class="container clsShowHide" id="diagnosis1">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 0 ~ 37점</h4>
        <p>발표상황에서 불안 수준이 낮은 편으로서 그다지 불편감과 불안을 느끼지 않습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis2">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 38 ~ 84점</h4>
        <p>발표상황에서 중간 정도의 불안을 경험하고 때때로 발표상황을 회피하기도 합니다. 그러나 그렇게까지 문제되지는 않습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis3">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 85 ~ 97점</h4>
        <p>발표상황에서 상당한 정도로 불편감과 불안을 경험하고 있으며, 여러 발표상황들을 회피하기도 합니다. 이러한 불편감과 회피가 지속되면 전문가를 찾아 상담할 것을 권합니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis4">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 98점 이상</h4>
        <p>심한 정도의 발표불안을 경험하면서, 수많은 발표상황을 회피하고 있으며, 이것이 스스로의 삶을 힘들게 하고 있습니다. 조속한 시일 내에 전문가를 통해 상담할 것을 권합니다.</p>
    </div>
</div>