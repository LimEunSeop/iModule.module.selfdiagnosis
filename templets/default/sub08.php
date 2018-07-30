<?php
/**
 * 이 파일은 iModule Selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * Selfdiagnosis 진로정체감 자가진단 템플릿
 * 
 * @file /modules/selfdiagnosis/templets/default/sub09.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license MIT License
 * @version 0.0.1
 * @modified 2018. 7. 23.
 */
if (defined('__IM__') == false) exit;
?>
<br><br><h1>진로정체감</h1><br>
<p>
다음은 <b>여러분의 진로가 어느 정도 결정되어 있는지</b>를 알아보기 위한 것입니다. 자신에게 가장 적합하다고 생각되는 정도에 체크하십시오.
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
            <th><span class="list-icon"></span>  1. 나는 진로를 결정했으며, 그 결정에 편안함을 느낀다.<br>
                <span class="indent-one">그리고 앞으로 어떻게 해야 할 지도 잘 알고 있다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q1' value='4' id='q10'><label for='q10'>전혀 아니다<br></label>
                <input type='radio' name='q1' value='3' id='q11'><label for='q11'>약간 그렇다<br></label>
                <input type='radio' name='q1' value='2' id='q12'><label for='q12'>웬만큼 그렇다<br></label>
                <input type='radio' name='q1' value='1' id='q13'><label for='q13'>상당히 그렇다<br></label>
                <input type='radio' name='q1' value='0' id='q14'><label for='q14'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  2. 나는 내가 선택한 전공에 편안함을 느끼며,<br>
                <span class="indent-one">어떻게 해야 할 지도 잘 알고 있다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q2' value='4' id='q20'><label for='q20'>전혀 아니다<br></label>
                <input type='radio' name='q2' value='3' id='q21'><label for='q21'>약간 그렇다<br></label>
                <input type='radio' name='q2' value='2' id='q22'><label for='q22'>웬만큼 그렇다<br></label>
                <input type='radio' name='q2' value='1' id='q23'><label for='q23'>상당히 그렇다<br></label>
                <input type='radio' name='q2' value='0' id='q24'><label for='q24'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  3. 나는 ___가 되고 싶으며, 조금만 더 재능과 조건이<br>
                <span class="indent-one">부여된다면 그렇게 될 수 있을 것이다.</span><br>
                <span class="indent-one">그러나 현재로는 불가능하다.</span><br>
                <span class="indent-one">하지만 다른 대안은 생각해 보지 않았다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q3' value='0' id='q30'><label for='q30'>전혀 아니다<br></label>
                <input type='radio' name='q3' value='1' id='q31'><label for='q31'>약간 그렇다<br></label>
                <input type='radio' name='q3' value='2' id='q32'><label for='q32'>웬만큼 그렇다<br></label>
                <input type='radio' name='q3' value='3' id='q33'><label for='q33'>상당히 그렇다<br></label>
                <input type='radio' name='q3' value='4' id='q34'><label for='q34'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  4. 나는 비슷한 정도로 매력을 느끼는 직업들 중<br>
                <span class="indent-one">어느 하나를 결정하느라 애를 먹고 있다.</th>
            <td class="selection-5">
                <input type='radio' name='q4' value='0' id='q40'><label for='q40'>전혀 아니다<br></label>
                <input type='radio' name='q4' value='1' id='q41'><label for='q41'>약간 그렇다<br></label>
                <input type='radio' name='q4' value='2' id='q42'><label for='q42'>웬만큼 그렇다<br></label>
                <input type='radio' name='q4' value='3' id='q43'><label for='q43'>상당히 그렇다<br></label>
                <input type='radio' name='q4' value='4' id='q44'><label for='q44'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  5. 나는 결국 직업을 가져야 할 것이지만,<br>
                <span class="indent-one">현재는 내가 아는 어떠한 직업에도 매력을</span><br>
                <span class="indent-one">느끼지 못하고 있다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q5' value='0' id='q50'><label for='q50'>전혀 아니다<br></label>
                <input type='radio' name='q5' value='1' id='q51'><label for='q51'>약간 그렇다<br></label>
                <input type='radio' name='q5' value='2' id='q52'><label for='q52'>웬만큼 그렇다<br></label>
                <input type='radio' name='q5' value='3' id='q53'><label for='q53'>상당히 그렇다<br></label>
                <input type='radio' name='q5' value='4' id='q54'><label for='q54'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  6. 나는 ___가 되고 싶다. 그러나 나에게 관심 갖는<br>
                <span class="indent-one">주변 사람들은 생각이 다르기 때문에 진로결정이</span><br>
                <span class="indent-one">어렵다. 서로 일치되는 직업을 발견하고 싶다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q6' value='0' id='q60'><label for='q60'>전혀 아니다<br></label>
                <input type='radio' name='q6' value='1' id='q61'><label for='q61'>약간 그렇다<br></label>
                <input type='radio' name='q6' value='2' id='q62'><label for='q62'>웬만큼 그렇다<br></label>
                <input type='radio' name='q6' value='3' id='q63'><label for='q63'>상당히 그렇다<br></label>
                <input type='radio' name='q6' value='4' id='q64'><label for='q64'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  7. 지금까지 나는 진로에 대해 많이 생각해 보지 않았다.<br>
                <span class="indent-one">내 스스로 결정해 본 경험이 별로 없고, 또 당장</span><br>
                <span class="indent-one">진로 결정을 할 정도의 충분한 정보를 갖지 못하기</span><br>
                <span class="indent-one">때문에 혼란스럽다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q7' value='0' id='q70'><label for='q70'>전혀 아니다<br></label>
                <input type='radio' name='q7' value='1' id='q71'><label for='q71'>약간 그렇다<br></label>
                <input type='radio' name='q7' value='2' id='q72'><label for='q72'>웬만큼 그렇다<br></label>
                <input type='radio' name='q7' value='3' id='q73'><label for='q73'>상당히 그렇다<br></label>
                <input type='radio' name='q7' value='4' id='q74'><label for='q74'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  8. 진로선택에 관한 모든 것이 너무 모호하고 불확실해서<br>
                <span class="indent-one">당분간 결정하는 것을 보류하고 싶다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q8' value='0' id='q80'><label for='q80'>전혀 아니다<br></label>
                <input type='radio' name='q8' value='1' id='q81'><label for='q81'>약간 그렇다<br></label>
                <input type='radio' name='q8' value='2' id='q82'><label for='q82'>웬만큼 그렇다<br></label>
                <input type='radio' name='q8' value='3' id='q83'><label for='q83'>상당히 그렇다<br></label>
                <input type='radio' name='q8' value='4' id='q84'><label for='q84'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  9. 나는 원하는 진로가 있었지만 최근에 그것을<br>
                <span class="indent-one">추구하는 것이 불가능하다는 것을 알게 되었다.</span><br>
                <span class="indent-one">그래서 이제는 가능한 다른 진로를 모색하려고 한다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q9' value='0' id='q90'><label for='q90'>전혀 아니다<br></label>
                <input type='radio' name='q9' value='1' id='q91'><label for='q91'>약간 그렇다<br></label>
                <input type='radio' name='q9' value='2' id='q92'><label for='q92'>웬만큼 그렇다<br></label>
                <input type='radio' name='q9' value='3' id='q93'><label for='q93'>상당히 그렇다<br></label>
                <input type='radio' name='q9' value='4' id='q94'><label for='q94'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  10. 나는 나의 진로선택에 확신을 갖고 싶지만,<br>
                <span class="indent-two">내가 생각하는 어떠한 진로도 나에게</span><br>
                <span class="indent-two">최선으로 생각되지 않는다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q10' value='0' id='q100'><label for='q100'>전혀 아니다<br></label>
                <input type='radio' name='q10' value='1' id='q101'><label for='q101'>약간 그렇다<br></label>
                <input type='radio' name='q10' value='2' id='q102'><label for='q102'>웬만큼 그렇다<br></label>
                <input type='radio' name='q10' value='3' id='q103'><label for='q103'>상당히 그렇다<br></label>
                <input type='radio' name='q10' value='4' id='q104'><label for='q104'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  11. 진로선택을 해야 한다는 것이 부담스럽기 때문에<br>
                <span class="indent-two">빨리 결정해버리고 싶다. 내가 어떤 진로를 택해야</span><br>
                <span class="indent-two">할지 알려줄 수 있는 검사라도 받고 싶다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q11' value='0' id='q110'><label for='q110'>전혀 아니다<br></label>
                <input type='radio' name='q11' value='1' id='q111'><label for='q111'>약간 그렇다<br></label>
                <input type='radio' name='q11' value='2' id='q112'><label for='q112'>웬만큼 그렇다<br></label>
                <input type='radio' name='q11' value='3' id='q113'><label for='q113'>상당히 그렇다<br></label>
                <input type='radio' name='q11' value='4' id='q114'><label for='q114'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  12. 나의 전공분야가 내가 만족할 만한 진로를<br>
                <span class="indent-two">제공해줄 수 있는지 잘 모르겠다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q12' value='0' id='q120'><label for='q120'>전혀 아니다<br></label>
                <input type='radio' name='q12' value='1' id='q121'><label for='q121'>약간 그렇다<br></label>
                <input type='radio' name='q12' value='2' id='q122'><label for='q122'>웬만큼 그렇다<br></label>
                <input type='radio' name='q12' value='3' id='q123'><label for='q123'>상당히 그렇다<br></label>
                <input type='radio' name='q12' value='4' id='q124'><label for='q124'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  13. 나는 나의 적성과 능력을 잘 모르기 때문에<br>
                <span class="indent-two">진로결정을 당장 할 수 없다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q13' value='0' id='q130'><label for='q130'>전혀 아니다<br></label>
                <input type='radio' name='q13' value='1' id='q131'><label for='q131'>약간 그렇다<br></label>
                <input type='radio' name='q13' value='2' id='q132'><label for='q132'>웬만큼 그렇다<br></label>
                <input type='radio' name='q13' value='3' id='q133'><label for='q133'>상당히 그렇다<br></label>
                <input type='radio' name='q13' value='4' id='q134'><label for='q134'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  14. 나는 나의 관심분야가 어떤 것인지 잘 모른다.<br>
                <span class="indent-two">흥미를 끄는 분야가 몇 가지 있지만, 나의 진로</span><br>
                <span class="indent-two">가능성과 어떤 관계가 있는지 잘 모르겠다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q14' value='0' id='q140'><label for='q140'>전혀 아니다<br></label>
                <input type='radio' name='q14' value='1' id='q141'><label for='q141'>약간 그렇다<br></label>
                <input type='radio' name='q14' value='2' id='q142'><label for='q142'>웬만큼 그렇다<br></label>
                <input type='radio' name='q14' value='3' id='q143'><label for='q143'>상당히 그렇다<br></label>
                <input type='radio' name='q14' value='4' id='q144'><label for='q144'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  15. 나는 많은 분야에 관심이 있으며, 어떤 진로를<br>
                <span class="indent-two">선택하든지 잘 할 수 있을 것 같다. 그러나 내가</span><br>
                <span class="indent-two">원하는 하나의 직업을 찾기는 힘들다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q15' value='0' id='q150'><label for='q150'>전혀 아니다<br></label>
                <input type='radio' name='q15' value='1' id='q151'><label for='q151'>약간 그렇다<br></label>
                <input type='radio' name='q15' value='2' id='q152'><label for='q152'>웬만큼 그렇다<br></label>
                <input type='radio' name='q15' value='3' id='q153'><label for='q153'>상당히 그렇다<br></label>
                <input type='radio' name='q15' value='4' id='q154'><label for='q154'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  16. 나는 진로 결정을 했지만, 앞으로 어떻게 해나가야<br>
                <span class="indent-two">할지는 확실하지 않다. 내가 선택한 ___이(가) 되기</span><br>
                <span class="indent-two">위해서 어떤 준비가 필요한지 모르겠다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q16' value='0' id='q160'><label for='q160'>전혀 아니다<br></label>
                <input type='radio' name='q16' value='1' id='q161'><label for='q161'>약간 그렇다<br></label>
                <input type='radio' name='q16' value='2' id='q162'><label for='q162'>웬만큼 그렇다<br></label>
                <input type='radio' name='q16' value='3' id='q163'><label for='q163'>상당히 그렇다<br></label>
                <input type='radio' name='q16' value='4' id='q164'><label for='q164'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  17. 진로결정을 하기 전에 여러 가지 직업들에 대한<br>
                <span class="indent-two">정보가 더 필요하다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q17' value='0' id='q170'><label for='q170'>전혀 아니다<br></label>
                <input type='radio' name='q17' value='1' id='q171'><label for='q171'>약간 그렇다<br></label>
                <input type='radio' name='q17' value='2' id='q172'><label for='q172'>웬만큼 그렇다<br></label>
                <input type='radio' name='q17' value='3' id='q173'><label for='q173'>상당히 그렇다<br></label>
                <input type='radio' name='q17' value='4' id='q174'><label for='q174'>매우 그렇다<br></label>
            </td>
        </tr>        
        </tbody>
    </table>
</div>

<div class="btn-container">
    <a href="#" class="action-button shadow animate blue">진로정체감 자가진단 결과보기</a>
</div>

<div class="resultbox">
    <div class="container clsShowHide" id="diagnosis1">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 0 ~ 20점</h4>
        <p>삶의 방향성을 확립하고 자신이 선택한 진로로 확신 있게 나아가고 있습니다. 자신의 진로선택을 더 확고하게 하기 위해, 자신이 선택한 영역의 교수 혹은 전문가 만나기, 해당 분야의 교수 연구팀에 참여하기, 파트타임 일에 지원하기 등이 도움을 줄 것입니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis2">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 21 ~ 43점</h4>
        <p>자신이 선택한 진로와 전공에 대해 어느 정도 알고 있고, 자신의 흥미와 능력도 인식하고 있습니다. 앞으로의 미래 설계를 위해 자신이 고려하는 진로에 대해 다양한 정보를 찾아보거나 그 분야의 경험을 해보는 것이 도움이 될 것입니다. 또 직업흥미검사와 같은 검사도 도움을 줄 것입니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis3">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 44점 이상</h4>
        <p>어떤 진로를 선택하는 것이 자신에게 최선인지를 잘 모르는 상태입니다. 상담센터에서 학기 중에 실시하는 진로탐색 프로그램에 참여하거나 전문 상담가와 개인상담을 통한 자기탐색 작업이 도움을 줄 것입니다.</p>
    </div>
</div>