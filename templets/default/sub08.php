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
                <input type="radio" name="q1" value="4">
                <input type="radio" name="q1" value="3">
                <input type="radio" name="q1" value="2">
                <input type="radio" name="q1" value="1">
                <input type="radio" name="q1" value="0">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  2. 나는 내가 선택한 전공에 편안함을 느끼며,<br>
                <span class="indent-one">어떻게 해야 할 지도 잘 알고 있다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q2" value="4">
                <input type="radio" name="q2" value="3">
                <input type="radio" name="q2" value="2">
                <input type="radio" name="q2" value="1">
                <input type="radio" name="q2" value="0">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  3. 나는 ___가 되고 싶으며, 조금만 더 재능과 조건이 부여된다면<br>
                <span class="indent-one">그렇게 될 수 있을 것이다. 그러나 현재로는 불가능하다.</span><br>
                <span class="indent-one">하지만 다른 대안은 생각해 보지 않았다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q3" value="0">
                <input type="radio" name="q3" value="1">
                <input type="radio" name="q3" value="2">
                <input type="radio" name="q3" value="3">
                <input type="radio" name="q3" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  4. 나는 비슷한 정도로 매력을 느끼는 직업들 중 어느 하나를<br>
                <span class="indent-one">결정하느라 애를 먹고 있다.</th>
            <td class="selection-5">
                <input type="radio" name="q4" value="0">
                <input type="radio" name="q4" value="1">
                <input type="radio" name="q4" value="2">
                <input type="radio" name="q4" value="3">
                <input type="radio" name="q4" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  5. 나는 결국 직업을 가져야 할 것이지만, 현재는 내가 아는<br>
                <span class="indent-one">어떠한 직업에도 매력을 느끼지 못하고 있다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q5" value="0">
                <input type="radio" name="q5" value="1">
                <input type="radio" name="q5" value="2">
                <input type="radio" name="q5" value="3">
                <input type="radio" name="q5" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  6. 나는 ___가 되고 싶다. 그러나 나에게 관심 갖는 주변 사람들은<br>
                <span class="indent-one">생각이 다르기 때문에 진로결정이 어렵다. 서로 일치되는</span><br>
                <span class="indent-one">직업을 발견하고 싶다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q6" value="0">
                <input type="radio" name="q6" value="1">
                <input type="radio" name="q6" value="2">
                <input type="radio" name="q6" value="3">
                <input type="radio" name="q6" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  7. 지금까지 나는 진로에 대해 많이 생각해 보지 않았다. 내 스스로<br>
                <span class="indent-one">결정해 본 경험이 별로 없고, 또 당장 진로 결정을 할 정도의</span><br>
                <span class="indent-one">충분한 정보를 갖지 못하기 때문에 혼란스럽다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q7" value="0">
                <input type="radio" name="q7" value="1">
                <input type="radio" name="q7" value="2">
                <input type="radio" name="q7" value="3">
                <input type="radio" name="q7" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  8. 진로선택에 관한 모든 것이 너무 모호하고 불확실해서 당분간<br>
                <span class="indent-one">결정하는 것을 보류하고 싶다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q8" value="0">
                <input type="radio" name="q8" value="1">
                <input type="radio" name="q8" value="2">
                <input type="radio" name="q8" value="3">
                <input type="radio" name="q8" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  9. 나는 원하는 진로가 있었지만 최근에 그것을 추구하는 것이<br>
                <span class="indent-one">불가능하다는 것을 알게 되었다. 그래서 이제는 가능한</span><br>
                <span class="indent-one">다른 진로를 모색하려고 한다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q9" value="0">
                <input type="radio" name="q9" value="1">
                <input type="radio" name="q9" value="2">
                <input type="radio" name="q9" value="3">
                <input type="radio" name="q9" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  10. 나는 나의 진로선택에 확신을 갖고 싶지만, 내가 생각하는<br>
                <span class="indent-two">어떠한 진로도 나에게 최선으로 생각되지 않는다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q10" value="0">
                <input type="radio" name="q10" value="1">
                <input type="radio" name="q10" value="2">
                <input type="radio" name="q10" value="3">
                <input type="radio" name="q10" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  11. 진로선택을 해야 한다는 것이 부담스럽기 때문에 빨리<br>
                <span class="indent-two">결정해버리고 싶다. 내가 어떤 진로를 택해야 할지</span><br>
                <span class="indent-two">알려줄 수 있는 검사라도 받고 싶다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q11" value="0">
                <input type="radio" name="q11" value="1">
                <input type="radio" name="q11" value="2">
                <input type="radio" name="q11" value="3">
                <input type="radio" name="q11" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  12. 나의 전공분야가 내가 만족할 만한 진로를 제공해줄 수<br>
                <span class="indent-two">있는지 잘 모르겠다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q12" value="0">
                <input type="radio" name="q12" value="1">
                <input type="radio" name="q12" value="2">
                <input type="radio" name="q12" value="3">
                <input type="radio" name="q12" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  13. 나는 나의 적성과 능력을 잘 모르기 때문에 진로결정을<br>
                <span class="indent-two">당장 할 수 없다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q13" value="0">
                <input type="radio" name="q13" value="1">
                <input type="radio" name="q13" value="2">
                <input type="radio" name="q13" value="3">
                <input type="radio" name="q13" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  14. 나는 나의 관심분야가 어떤 것인지 잘 모른다. 흥미를 끄는<br>
                <span class="indent-two">분야가 몇 가지 있지만, 나의 진로 가능성과 어떤 관계가</span><br>
                <span class="indent-two">있는지 잘 모르겠다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q14" value="0">
                <input type="radio" name="q14" value="1">
                <input type="radio" name="q14" value="2">
                <input type="radio" name="q14" value="3">
                <input type="radio" name="q14" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  15. 나는 많은 분야에 관심이 있으며, 어떤 진로를 선택하든지<br>
                <span class="indent-two">잘 할 수 있을 것 같다. 그러나 내가 원하는 하나의 직업을</span><br>
                <span class="indent-two">찾기는 힘들다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q15" value="0">
                <input type="radio" name="q15" value="1">
                <input type="radio" name="q15" value="2">
                <input type="radio" name="q15" value="3">
                <input type="radio" name="q15" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  16. 나는 진로 결정을 했지만, 앞으로 어떻게 해나가야 할지는<br>
                <span class="indent-two">확실하지 않다. 내가 선택한 ___이(가) 되기 위해서 어떤</span><br>
                <span class="indent-two">준비가 필요한지 모르겠다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q16" value="0">
                <input type="radio" name="q16" value="1">
                <input type="radio" name="q16" value="2">
                <input type="radio" name="q16" value="3">
                <input type="radio" name="q16" value="4">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  17. 진로결정을 하기 전에 여러 가지 직업들에 대한 정보가<br>
                <span class="indent-two">더 필요하다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q17" value="0">
                <input type="radio" name="q17" value="1">
                <input type="radio" name="q17" value="2">
                <input type="radio" name="q17" value="3">
                <input type="radio" name="q17" value="4">
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