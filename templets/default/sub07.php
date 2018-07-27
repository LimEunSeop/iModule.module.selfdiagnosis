<?php
/**
 * 이 파일은 iModule Selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * Selfdiagnosis 인정욕구 자가진단 템플릿
 * 
 * @file /modules/selfdiagnosis/templets/default/sub08.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license MIT License
 * @version 0.0.1
 * @modified 2018. 7. 23.
 */
if (defined('__IM__') == false) exit;
?>
<p>
사람들은 누구나 다른 사람의 인정을 받으면 기분이 좋아집니다. 그러나 다른 사람의 평가에 전혀 신경 쓰지 않거나, 반대로 지나치게 다른 사람을 의식하면 주도적으로 자신의 삶을 살아가는데 어려움이 생기게 됩니다.
</p><br>
<p>
다음의 리스트를 체크해보시고, 나는 다른 사람들의 인정이나 평가에 대해 어떤 태도를 지니고 있는지 살펴보세요.
</p>

<div class="container">
    <table class="selection-screen">
    <thead>
            <th></th>
            <th>
                <ul class="degree-5">
                    <li>전혀<br>아니다</li>
                    <li class="vertical-center">아니다</li>
                    <li>가끔<br>그렇다</li>
                    <li>자주<br>그렇다</li>
                    <li>매우<br>그렇다</li>
                </ul>
            </th>
        </thead>
        
        <tbody>
        <tr>
            <th><span class="list-icon"></span>  1. 다른 사람들에게 어떻게 보이는가에 관심이 많다.</th>
            <td class="selection-5">
                <input type='radio' name='q1' value='1' id='q10'><label for='q10'>전혀 아니다<br></label>
                <input type='radio' name='q1' value='2' id='q11'><label for='q11'>아니다<br></label>
                <input type='radio' name='q1' value='3' id='q12'><label for='q12'>가끔 그렇다<br></label>
                <input type='radio' name='q1' value='4' id='q13'><label for='q13'>자주 그렇다<br></label>
                <input type='radio' name='q1' value='5' id='q14'><label for='q14'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  2. 주변 사람들로부터 인기를 끌었으면 좋겠다고<br>
                <span class="indent-one">생각한다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q2' value='1' id='q20'><label for='q20'>전혀 아니다<br></label>
                <input type='radio' name='q2' value='2' id='q21'><label for='q21'>아니다<br></label>
                <input type='radio' name='q2' value='3' id='q22'><label for='q22'>가끔 그렇다<br></label>
                <input type='radio' name='q2' value='4' id='q23'><label for='q23'>자주 그렇다<br></label>
                <input type='radio' name='q2' value='5' id='q24'><label for='q24'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  3. 다른 사람들과 함께 일할 때 그들이 나를 좋아하는지<br>
                <span class="indent-one">그렇지 않은지를 살핀다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q3' value='1' id='q30'><label for='q30'>전혀 아니다<br></label>
                <input type='radio' name='q3' value='2' id='q31'><label for='q31'>아니다<br></label>
                <input type='radio' name='q3' value='3' id='q32'><label for='q32'>가끔 그렇다<br></label>
                <input type='radio' name='q3' value='4' id='q33'><label for='q33'>자주 그렇다<br></label>
                <input type='radio' name='q3' value='5' id='q34'><label for='q34'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  4. 다른 사람들과의 관계에서 상대방의 반응을 많이<br>
                <span class="indent-one">의식한다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q4' value='1' id='q40'><label for='q40'>전혀 아니다<br></label>
                <input type='radio' name='q4' value='2' id='q41'><label for='q41'>아니다<br></label>
                <input type='radio' name='q4' value='3' id='q42'><label for='q42'>가끔 그렇다<br></label>
                <input type='radio' name='q4' value='4' id='q43'><label for='q43'>자주 그렇다<br></label>
                <input type='radio' name='q4' value='5' id='q44'><label for='q44'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  5. 다른 사람들이 나를 마땅찮게 여기는 기마가 보이면<br>
                <span class="indent-one">즉시 행동을 바꾼다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q5' value='1' id='q50'><label for='q50'>전혀 아니다<br></label>
                <input type='radio' name='q5' value='2' id='q51'><label for='q51'>아니다<br></label>
                <input type='radio' name='q5' value='3' id='q52'><label for='q52'>가끔 그렇다<br></label>
                <input type='radio' name='q5' value='4' id='q53'><label for='q53'>자주 그렇다<br></label>
                <input type='radio' name='q5' value='5' id='q54'><label for='q54'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  6. 일상적으로 좋은 인상을 주는 것에 대해 걱정을<br>
                <span class="indent-one">많이 한다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q6' value='1' id='q60'><label for='q60'>전혀 아니다<br></label>
                <input type='radio' name='q6' value='2' id='q61'><label for='q61'>아니다<br></label>
                <input type='radio' name='q6' value='3' id='q62'><label for='q62'>가끔 그렇다<br></label>
                <input type='radio' name='q6' value='4' id='q63'><label for='q63'>자주 그렇다<br></label>
                <input type='radio' name='q6' value='5' id='q64'><label for='q64'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  7. 친구가 나를 어떻게 보는 지에 대해 곰곰이 생각한다.</th>
            <td class="selection-5">
                <input type='radio' name='q7' value='1' id='q70'><label for='q70'>전혀 아니다<br></label>
                <input type='radio' name='q7' value='2' id='q71'><label for='q71'>아니다<br></label>
                <input type='radio' name='q7' value='3' id='q72'><label for='q72'>가끔 그렇다<br></label>
                <input type='radio' name='q7' value='4' id='q73'><label for='q73'>자주 그렇다<br></label>
                <input type='radio' name='q7' value='5' id='q74'><label for='q74'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  8. 다른 사람들이 나를 어떻게 평가하느냐가<br>
                <span class="indent-one">나의 기분이나 행동에 큰 영향을 준다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q8' value='1' id='q80'><label for='q80'>전혀 아니다<br></label>
                <input type='radio' name='q8' value='2' id='q81'><label for='q81'>아니다<br></label>
                <input type='radio' name='q8' value='3' id='q82'><label for='q82'>가끔 그렇다<br></label>
                <input type='radio' name='q8' value='4' id='q83'><label for='q83'>자주 그렇다<br></label>
                <input type='radio' name='q8' value='5' id='q84'><label for='q84'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  9. 다른 사람들에게 어떤 인상을 주고 있는가에 대해<br>
                <span class="indent-one">많이 생각한다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q9' value='1' id='q90'><label for='q90'>전혀 아니다<br></label>
                <input type='radio' name='q9' value='2' id='q91'><label for='q91'>아니다<br></label>
                <input type='radio' name='q9' value='3' id='q92'><label for='q92'>가끔 그렇다<br></label>
                <input type='radio' name='q9' value='4' id='q93'><label for='q93'>자주 그렇다<br></label>
                <input type='radio' name='q9' value='5' id='q94'><label for='q94'>매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  10. 상황에 어울리지 못하게 될까 봐, 내 행동에 대한<br>
                <span class="indent-two">다른 사람들의 반응에 주목한다.</span></th>
            <td class="selection-5">
                <input type='radio' name='q10' value='1' id='q100'><label for='q100'>전혀 아니다<br></label>
                <input type='radio' name='q10' value='2' id='q101'><label for='q101'>아니다<br></label>
                <input type='radio' name='q10' value='3' id='q102'><label for='q102'>가끔 그렇다<br></label>
                <input type='radio' name='q10' value='4' id='q103'><label for='q103'>자주 그렇다<br></label>
                <input type='radio' name='q10' value='5' id='q104'><label for='q104'>매우 그렇다<br></label>
            </td>
        </tr>        
        </tbody>
    </table>
</div>

<div class="btn-container">
    <a href="#" class="action-button shadow animate blue">인정욕구 자가진단 결과보기</a>
</div>

<div class="resultbox">
    <div class="container clsShowHide" id="diagnosis1">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 10 ~ 25점</h4>
        <p>인기에 연연하지 않는 편으로, 다른 사람들이 나를 어떻게 보는가에 상관없이 행동할 수 있습니다. 다른 사람들의 평가에 의존하지 않고 주체적이고 대범하며 당당하다는 인상을 줄 수 있지만, 심한 경우 남에 대한 배려 없이 지나치게 자기중심적이 태도를 취할 수도 있습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis2">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 26 ～ 40점</h4>
        <p>다른 사람들의 평가나 비판을 적절히 의식하면서, 다른 사람들에게 나쁜 인상을 주지 않는 선에 맞추어 행동할 수 있습니다. 적당한 수준에서 자기 주관을 잃지 않으면서도, 대인관계에서 별다른 갈등을 일으키지 않아 대체로 무리가 없습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis3">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 41 ~ 50점</h4>
        <p>자기 제시 동기가 너무 강해 다른 사람들의 시선을 지나치게 의식하고 그에 연연하기 쉽습니다. 다른 사람들이 좋게 평가해 주고 주목하며 관심을 자져 주기를 원해 심지어 주목을 끄는 행동을 자처할 수도 있습니다. 반면 주위의 간심이 기대에 미치지 못하거나 부정적인 평가를 받으면, 필요 이상으로 실망하고 상처받을 수 있습니다.</p>
    </div>
</div>