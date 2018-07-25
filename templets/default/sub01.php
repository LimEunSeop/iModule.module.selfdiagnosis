<?php
/**
 * 이 파일은 iModule Selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * Selfdiagnosis 우울 자가진단 템플릿
 * 
 * @file /modules/selfdiagnosis/templets/default/sub01.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license MIT License
 * @version 0.0.1
 * @modified 2018. 7. 23.
 */
if (defined('__IM__') == false) exit;
?>
<p>자신의 심리적 상태를 자가 진단해 볼 수 있도록 아래에 우울과 관련된 여러 경험 내용이 열거되어 있습니다.</p>
<p>아래의 항목을 잘 읽고 <b>지난 한 주 동안 이러한 경험을 얼마나 자주 했는지</b>를 그 빈도에 따라 적당한 칸에 표시하세요.</p>
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
            <th><span class="list-icon"></span> 1. 나는 슬프고 기분이 울적하다</th>
            <td class="selection-4">
                <input type="radio" name="q1" value="0">
                <input type="radio" name="q1" value="1">
                <input type="radio" name="q1" value="2">
                <input type="radio" name="q1" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 2. 나의 앞날에 희망이 없다고 느껴진다</th>
            <td class="selection-4">
                <input type="radio" name="q2" value="0">
                <input type="radio" name="q2" value="1">
                <input type="radio" name="q2" value="2">
                <input type="radio" name="q2" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 3. 내 자신이 무가치한 실패자라고 생각된다</th>
            <td class="selection-4">
                <input type="radio" name="q3" value="0">
                <input type="radio" name="q3" value="1">
                <input type="radio" name="q3" value="2">
                <input type="radio" name="q3" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 4. 나는 다른 사람에 비해 열등하고 뭔가 잘못되어<br>
                <span class="indent-one">있다고 느껴진다</span></th>
            <td class="selection-4">
                <input type="radio" name="q4" value="0">
                <input type="radio" name="q4" value="1">
                <input type="radio" name="q4" value="2">
                <input type="radio" name="q4" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 5. 나는 매사에 내 자신을 비판하고 자책한다</th>
            <td class="selection-4">
                <input type="radio" name="q5" value="0">
                <input type="radio" name="q5" value="1">
                <input type="radio" name="q5" value="2">
                <input type="radio" name="q5" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 6. 어떤 일을 판단하고 결정하기가 어렵다</th>
            <td class="selection-4">
                <input type="radio" name="q6" value="0">
                <input type="radio" name="q6" value="1">
                <input type="radio" name="q6" value="2">
                <input type="radio" name="q6" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 7. 나는 쉽게 화가 나고 짜증이 난다</th>
            <td class="selection-4">
                <input type="radio" name="q7" value="0">
                <input type="radio" name="q7" value="1">
                <input type="radio" name="q7" value="2">
                <input type="radio" name="q7" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 8. 진로, 취미, 가족, 친구에 대한 관심을 잃었다</th>
            <td class="selection-4">
                <input type="radio" name="q8" value="0">
                <input type="radio" name="q8" value="1">
                <input type="radio" name="q8" value="2">
                <input type="radio" name="q8" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 9. 어떤 일에 내 자신을 억지로 내몰지 않으면 일을<br>
                <span class="indent-one">하기 힘들다</span></th>
            <td class="selection-4">
                <input type="radio" name="q9" value="0">
                <input type="radio" name="q9" value="1">
                <input type="radio" name="q9" value="2">
                <input type="radio" name="q9" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 10. 나의 외모는 추하다고 생각한다</th>
            <td class="selection-4">
                <input type="radio" name="q10" value="0">
                <input type="radio" name="q10" value="1">
                <input type="radio" name="q10" value="2">
                <input type="radio" name="q10" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 11. 식욕이 없다 또는 지나치게 많이 먹는다</th>
            <td class="selection-4">
                <input type="radio" name="q11" value="0">
                <input type="radio" name="q11" value="1">
                <input type="radio" name="q11" value="2">
                <input type="radio" name="q11" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 12. 불면으로 고생하며 잠을 개운하게 자지 못 한다<br>
                <span class="indent-two">또는 지나치게 피곤하여 너무 많이 잔다</span></th>
            <td class="selection-4">
                <input type="radio" name="q12" value="0">
                <input type="radio" name="q12" value="1">
                <input type="radio" name="q12" value="2">
                <input type="radio" name="q12" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 13. 성(sex)에 대한 관심을 잃었다</th>
            <td class="selection-4">
                <input type="radio" name="q13" value="0">
                <input type="radio" name="q13" value="1">
                <input type="radio" name="q13" value="2">
                <input type="radio" name="q13" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 14. 나의 건강에 대한 걱정을 많이 한다</th>
            <td class="selection-4">
                <input type="radio" name="q14" value="0">
                <input type="radio" name="q14" value="1">
                <input type="radio" name="q14" value="2">
                <input type="radio" name="q14" value="3">
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span> 15. 인생은 살 가치가 없으며 죽는 게 낫다는 생각을<br>
                <span class="indent-two">한다</span></th>
            <td class="selection-4">
                <input type="radio" name="q15" value="0">
                <input type="radio" name="q15" value="1">
                <input type="radio" name="q15" value="2">
                <input type="radio" name="q15" value="3">
            </td>
        </tr>
        </tbody>
    </table>    
</div>
<div class="btn-container">
    <a href="#" class="action-button shadow animate blue">우울 자가진단 결과보기</a>
</div>


<div class="container clsShowHide" id="diagnosis1">
    <h2>자가진단 결과보기</h2>
    <h4>0 ~ 10점</h4>
    <p>현재 우울하지 않은 상태입니다.</p>
</div>

<div class="container clsShowHide" id="diagnosis2">
    <h2>자가진단 결과보기</h2>
    <h4>11 ~ 20점</h4>
    <p>정상적이지만 가벼운 우울상태입니다. 자신의 기분을 새롭게 전환할 수 있는 노력이 필요합니다.</p>
</div>

<div class="container clsShowHide" id="diagnosis3">
    <h2>자가진단 결과보기</h2>
    <h4>21 ~ 30점</h4>
    <p>무시하기 힘든 우울상태입니다. 우울상태를 극복하기 위한 적극적인 노력이 필요하며 이런 우울상태가 두어 달 이상 지속된 경우에는 전문가의 도움을 문가의 도움을 받으십시오.</p>
</div>

<div class="container clsShowHide" id="diagnosis4">
    <h2>자가진단 결과보기</h2>
    <h4>31 ~ 45점</h4>
    <p>우울 정도가 심한 상태입니다. 대인관계가 힘들고 고립감, 소외감을 느끼고, 비관적이며, 상처가 많을 수 있습니다. 가능한 빨리 전문적인 도움을 받는 것이 좋습니다.</p>
</div>