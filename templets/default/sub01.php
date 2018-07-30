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
<br><br><h1>우울</h1><br>
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
            <th><span class="list-icon"></span>  1. 나는 슬프고 기분이 울적하다</th>
            <td class="selection-4">
                <input type="radio" name="q1" value="0" id="q10"><label for="q10">전혀 아니다<br></label>
                <input type="radio" name="q1" value="1" id="q11"><label for="q11">조금 느꼈다<br></label>
                <input type="radio" name="q1" value="2" id="q12"><label for="q12">상당히 느꼈다<br></label>
                <input type="radio" name="q1" value="3" id="q13"><label for="q13">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  2. 나의 앞날에 희망이 없다고 느껴진다</th>
            <td class="selection-4">
                <input type="radio" name="q2" value="0" id="q20"><label for="q20">전혀 아니다<br></label>
                <input type="radio" name="q2" value="1" id="q21"><label for="q21">조금 느꼈다<br></label>
                <input type="radio" name="q2" value="2" id="q22"><label for="q22">상당히 느꼈다<br></label>
                <input type="radio" name="q2" value="3" id="q23"><label for="q23">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  3. 내 자신이 무가치한 실패자라고 생각된다</th>
            <td class="selection-4">
                <input type="radio" name="q3" value="0" id="q30"><label for="q30">전혀 아니다<br></label>
                <input type="radio" name="q3" value="1" id="q31"><label for="q31">조금 느꼈다<br></label>
                <input type="radio" name="q3" value="2" id="q32"><label for="q32">상당히 느꼈다<br></label>
                <input type="radio" name="q3" value="3" id="q33"><label for="q33">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  4. 나는 다른 사람에 비해 열등하고 뭔가 잘못되어<br>
                <span class="indent-one">있다고 느껴진다</span></th>
            <td class="selection-4">
                <input type="radio" name="q4" value="0" id="q40"><label for="q40">전혀 아니다<br></label>
                <input type="radio" name="q4" value="1" id="q41"><label for="q41">조금 느꼈다<br></label>
                <input type="radio" name="q4" value="2" id="q42"><label for="q42">상당히 느꼈다<br></label>
                <input type="radio" name="q4" value="3" id="q43"><label for="q43">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  5. 나는 매사에 내 자신을 비판하고 자책한다</th>
            <td class="selection-4">
                <input type="radio" name="q5" value="0" id="q50"><label for="q50">전혀 아니다<br></label>
                <input type="radio" name="q5" value="1" id="q51"><label for="q51">조금 느꼈다<br></label>
                <input type="radio" name="q5" value="2" id="q52"><label for="q52">상당히 느꼈다<br></label>
                <input type="radio" name="q5" value="3" id="q53"><label for="q53">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  6. 어떤 일을 판단하고 결정하기가 어렵다</th>
            <td class="selection-4">
                <input type="radio" name="q6" value="0" id="q60"><label for="q60">전혀 아니다<br></label>
                <input type="radio" name="q6" value="1" id="q61"><label for="q61">조금 느꼈다<br></label>
                <input type="radio" name="q6" value="2" id="q62"><label for="q62">상당히 느꼈다<br></label>
                <input type="radio" name="q6" value="3" id="q63"><label for="q63">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  7. 나는 쉽게 화가 나고 짜증이 난다</th>
            <td class="selection-4">
                <input type="radio" name="q7" value="0" id="q70"><label for="q70">전혀 아니다<br></label>
                <input type="radio" name="q7" value="1" id="q71"><label for="q71">조금 느꼈다<br></label>
                <input type="radio" name="q7" value="2" id="q72"><label for="q72">상당히 느꼈다<br></label>
                <input type="radio" name="q7" value="3" id="q73"><label for="q73">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  8. 진로, 취미, 가족, 친구에 대한 관심을 잃었다</th>
            <td class="selection-4">
                <input type="radio" name="q8" value="0" id="q80"><label for="q80">전혀 아니다<br></label>
                <input type="radio" name="q8" value="1" id="q81"><label for="q81">조금 느꼈다<br></label>
                <input type="radio" name="q8" value="2" id="q82"><label for="q82">상당히 느꼈다<br></label>
                <input type="radio" name="q8" value="3" id="q83"><label for="q83">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  9. 어떤 일에 내 자신을 억지로 내몰지 않으면 일을<br>
                <span class="indent-one">하기 힘들다</span></th>
            <td class="selection-4">
                <input type="radio" name="q9" value="0" id="q90"><label for="q90">전혀 아니다<br></label>
                <input type="radio" name="q9" value="1" id="q91"><label for="q91">조금 느꼈다<br></label>
                <input type="radio" name="q9" value="2" id="q92"><label for="q92">상당히 느꼈다<br></label>
                <input type="radio" name="q9" value="3" id="q93"><label for="q93">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  10. 나의 외모는 추하다고 생각한다</th>
            <td class="selection-4">
                <input type="radio" name="q10" value="0" id="q100"><label for="q100">전혀 아니다<br></label>
                <input type="radio" name="q10" value="1" id="q101"><label for="q101">조금 느꼈다<br></label>
                <input type="radio" name="q10" value="2" id="q102"><label for="q102">상당히 느꼈다<br></label>
                <input type="radio" name="q10" value="3" id="q103"><label for="q103">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  11. 식욕이 없다 또는 지나치게 많이 먹는다</th>
            <td class="selection-4">
                <input type="radio" name="q11" value="0" id="q110"><label for="q110">전혀 아니다<br></label>
                <input type="radio" name="q11" value="1" id="q111"><label for="q111">조금 느꼈다<br></label>
                <input type="radio" name="q11" value="2" id="q112"><label for="q112">상당히 느꼈다<br></label>
                <input type="radio" name="q11" value="3" id="q113"><label for="q113">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  12. 불면으로 고생하며 잠을 개운하게 자지 못 한다<br>
                <span class="indent-two">또는 지나치게 피곤하여 너무 많이 잔다</span></th>
            <td class="selection-4">
                <input type="radio" name="q12" value="0" id="q120"><label for="q120">전혀 아니다<br></label>
                <input type="radio" name="q12" value="1" id="q121"><label for="q121">조금 느꼈다<br></label>
                <input type="radio" name="q12" value="2" id="q122"><label for="q122">상당히 느꼈다<br></label>
                <input type="radio" name="q12" value="3" id="q123"><label for="q123">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  13. 성(sex)에 대한 관심을 잃었다</th>
            <td class="selection-4">
                <input type="radio" name="q13" value="0" id="q130"><label for="q130">전혀 아니다<br></label>
                <input type="radio" name="q13" value="1" id="q131"><label for="q131">조금 느꼈다<br></label>
                <input type="radio" name="q13" value="2" id="q132"><label for="q132">상당히 느꼈다<br></label>
                <input type="radio" name="q13" value="3" id="q133"><label for="q133">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  14. 나의 건강에 대한 걱정을 많이 한다</th>
            <td class="selection-4">
                <input type="radio" name="q14" value="0" id="q140"><label for="q140">전혀 아니다<br></label>
                <input type="radio" name="q14" value="1" id="q141"><label for="q141">조금 느꼈다<br></label>
                <input type="radio" name="q14" value="2" id="q142"><label for="q142">상당히 느꼈다<br></label>
                <input type="radio" name="q14" value="3" id="q143"><label for="q143">심하게 느꼈다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  15. 인생은 살 가치가 없으며 죽는 게 낫다는 생각을<br>
                <span class="indent-two">한다</span></th>
            <td class="selection-4">
                <input type="radio" name="q15" value="0" id="q150"><label for="q150">전혀 아니다<br></label>
                <input type="radio" name="q15" value="1" id="q151"><label for="q151">조금 느꼈다<br></label>
                <input type="radio" name="q15" value="2" id="q152"><label for="q152">상당히 느꼈다<br></label>
                <input type="radio" name="q15" value="3" id="q153"><label for="q153">심하게 느꼈다<br></label>
            </td>
        </tr>
        </tbody>
    </table>    
</div>
<div class="btn-container">
    <a href="#" class="action-button shadow animate blue">우울 자가진단 결과보기</a>
</div>

<div class="resultbox">
    <div class="container clsShowHide" id="diagnosis1">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 0 ~ 10점</h4>
        <p>현재 우울하지 않은 상태입니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis2">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 11 ~ 20점</h4>
        <p>정상적이지만 가벼운 우울상태입니다. 자신의 기분을 새롭게 전환할 수 있는 노력이 필요합니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis3">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 21 ~ 30점</h4>
        <p>무시하기 힘든 우울상태입니다. 우울상태를 극복하기 위한 적극적인 노력이 필요하며 이런 우울상태가 두어 달 이상 지속된 경우에는 전문가의 도움을 문가의 도움을 받으십시오.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis4">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 31 ~ 45점</h4>
        <p>우울 정도가 심한 상태입니다. 대인관계가 힘들고 고립감, 소외감을 느끼고, 비관적이며, 상처가 많을 수 있습니다. 가능한 빨리 전문적인 도움을 받는 것이 좋습니다.</p>
    </div>
</div>