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
<br><br><h1>사회불안</h1><br>
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
            <th><span class="list-icon"></span>  1. 익숙하지 않은 사회적 상황에서도 편안함을 느낀다.</th>
            <td class="selection-5">
                <input type="radio" name="q1" value="0" id="q10"><label for="q10">전혀 아니다<br></label>
                <input type="radio" name="q1" value="1" id="q11"><label for="q11">약간 그렇다<br></label>
                <input type="radio" name="q1" value="2" id="q12"><label for="q12">웬만큼 그렇다<br></label>
                <input type="radio" name="q1" value="3" id="q13"><label for="q13">상당히 그렇다<br></label>
                <input type="radio" name="q1" value="4" id="q14"><label for="q14">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  2. 사람들과 적극적으로 어울려야하는 자리는 피하려고<br>
                <span class="indent-one">한다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q2" value="0" id="q20"><label for="q20">전혀 아니다<br></label>
                <input type="radio" name="q2" value="1" id="q21"><label for="q21">약간 그렇다<br></label>
                <input type="radio" name="q2" value="2" id="q22"><label for="q22">웬만큼 그렇다<br></label>
                <input type="radio" name="q2" value="3" id="q23"><label for="q23">상당히 그렇다<br></label>
                <input type="radio" name="q2" value="4" id="q24"><label for="q24">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  3. 낯선 사람들과 함께 있을 때 쉽게 마음이 편안해<br>
                <span class="indent-one">진다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q3" value="0" id="q30"><label for="q30">전혀 아니다<br></label>
                <input type="radio" name="q3" value="1" id="q31"><label for="q31">약간 그렇다<br></label>
                <input type="radio" name="q3" value="2" id="q32"><label for="q32">웬만큼 그렇다<br></label>
                <input type="radio" name="q3" value="3" id="q33"><label for="q33">상당히 그렇다<br></label>
                <input type="radio" name="q3" value="4" id="q34"><label for="q34">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  4. 특별히 사람들을 피하고 싶은 생각은 없다.</th>
            <td class="selection-5">
                <input type="radio" name="q4" value="0" id="q40"><label for="q40">전혀 아니다<br></label>
                <input type="radio" name="q4" value="1" id="q41"><label for="q41">약간 그렇다<br></label>
                <input type="radio" name="q4" value="2" id="q42"><label for="q42">웬만큼 그렇다<br></label>
                <input type="radio" name="q4" value="3" id="q43"><label for="q43">상당히 그렇다<br></label>
                <input type="radio" name="q4" value="4" id="q44"><label for="q44">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  5. 사람들과 어울리는 모임에서 종종 당황함을 느낀다.</th>
            <td class="selection-5">
                <input type="radio" name="q5" value="0" id="q50"><label for="q50">전혀 아니다<br></label>
                <input type="radio" name="q5" value="1" id="q51"><label for="q51">약간 그렇다<br></label>
                <input type="radio" name="q5" value="2" id="q52"><label for="q52">웬만큼 그렇다<br></label>
                <input type="radio" name="q5" value="3" id="q53"><label for="q53">상당히 그렇다<br></label>
                <input type="radio" name="q5" value="4" id="q54"><label for="q54">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  6. 사람들과 어울리는 모임에서 대개 차분하고 편안<br>
                <span class="indent-one">하다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q6" value="0" id="q60"><label for="q60">전혀 아니다<br></label>
                <input type="radio" name="q6" value="1" id="q61"><label for="q61">약간 그렇다<br></label>
                <input type="radio" name="q6" value="2" id="q62"><label for="q62">웬만큼 그렇다<br></label>
                <input type="radio" name="q6" value="3" id="q63"><label for="q63">상당히 그렇다<br></label>
                <input type="radio" name="q6" value="4" id="q64"><label for="q64">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  7. 이성에게 말을 걸 때 대체로 마음이 편하다.</th>
            <td class="selection-5">
                <input type="radio" name="q7" value="0" id="q70"><label for="q70">전혀 아니다<br></label>
                <input type="radio" name="q7" value="1" id="q71"><label for="q71">약간 그렇다<br></label>
                <input type="radio" name="q7" value="2" id="q72"><label for="q72">웬만큼 그렇다<br></label>
                <input type="radio" name="q7" value="3" id="q73"><label for="q73">상당히 그렇다<br></label>
                <input type="radio" name="q7" value="4" id="q74"><label for="q74">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  8. 잘 알지 못하는 사람에게 말을 거는 것을 피하려고<br>
                <span class="indent-one">한다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q8" value="0" id="q80"><label for="q80">전혀 아니다<br></label>
                <input type="radio" name="q8" value="1" id="q81"><label for="q81">약간 그렇다<br></label>
                <input type="radio" name="q8" value="2" id="q82"><label for="q82">웬만큼 그렇다<br></label>
                <input type="radio" name="q8" value="3" id="q83"><label for="q83">상당히 그렇다<br></label>
                <input type="radio" name="q8" value="4" id="q84"><label for="q84">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  9. 새로운 사람과 만날 기회가 생기면 자주 응한다.</th>
            <td class="selection-5">
                <input type="radio" name="q9" value="0" id="q90"><label for="q90">전혀 아니다<br></label>
                <input type="radio" name="q9" value="1" id="q91"><label for="q91">약간 그렇다<br></label>
                <input type="radio" name="q9" value="2" id="q92"><label for="q92">웬만큼 그렇다<br></label>
                <input type="radio" name="q9" value="3" id="q93"><label for="q93">상당히 그렇다<br></label>
                <input type="radio" name="q9" value="4" id="q94"><label for="q94">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  10. 우연하게 남녀가 같이 모이는 자리에서 종종 예민<br>
                <span class="indent-two">해지고 긴장된다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q10" value="0" id="q100"><label for="q100">전혀 아니다<br></label>
                <input type="radio" name="q10" value="1" id="q101"><label for="q101">약간 그렇다<br></label>
                <input type="radio" name="q10" value="2" id="q102"><label for="q102">웬만큼 그렇다<br></label>
                <input type="radio" name="q10" value="3" id="q103"><label for="q103">상당히 그렇다<br></label>
                <input type="radio" name="q10" value="4" id="q104"><label for="q104">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  11. 사람을 잘 알게 되기 전까지는 같이 있는 것이<br>
                <span class="indent-two">긴장된다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q11" value="0" id="q110"><label for="q110">전혀 아니다<br></label>
                <input type="radio" name="q11" value="1" id="q111"><label for="q111">약간 그렇다<br></label>
                <input type="radio" name="q11" value="2" id="q112"><label for="q112">웬만큼 그렇다<br></label>
                <input type="radio" name="q11" value="3" id="q113"><label for="q113">상당히 그렇다<br></label>
                <input type="radio" name="q11" value="4" id="q114"><label for="q114">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  12. 많은 사람들과 어울릴 때 보통 편안함을 느낀다.</th>
            <td class="selection-5">
                <input type="radio" name="q12" value="0" id="q120"><label for="q120">전혀 아니다<br></label>
                <input type="radio" name="q12" value="1" id="q121"><label for="q121">약간 그렇다<br></label>
                <input type="radio" name="q12" value="2" id="q122"><label for="q122">웬만큼 그렇다<br></label>
                <input type="radio" name="q12" value="3" id="q123"><label for="q123">상당히 그렇다<br></label>
                <input type="radio" name="q12" value="4" id="q124"><label for="q124">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  13. 사람들로부터 떨어져 있고 싶을 때가 자주 있다.</th>
            <td class="selection-5">
                <input type="radio" name="q13" value="0" id="q130"><label for="q130">전혀 아니다<br></label>
                <input type="radio" name="q13" value="1" id="q131"><label for="q131">약간 그렇다<br></label>
                <input type="radio" name="q13" value="2" id="q132"><label for="q132">웬만큼 그렇다<br></label>
                <input type="radio" name="q13" value="3" id="q133"><label for="q133">상당히 그렇다<br></label>
                <input type="radio" name="q13" value="4" id="q134"><label for="q134">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  14. 모르는 사람들 속에 있으면 보통 마음이 편치 않다.</th>
            <td class="selection-5">
                <input type="radio" name="q14" value="0" id="q140"><label for="q140">전혀 아니다<br></label>
                <input type="radio" name="q14" value="1" id="q141"><label for="q141">약간 그렇다<br></label>
                <input type="radio" name="q14" value="2" id="q142"><label for="q142">웬만큼 그렇다<br></label>
                <input type="radio" name="q14" value="3" id="q143"><label for="q143">상당히 그렇다<br></label>
                <input type="radio" name="q14" value="4" id="q144"><label for="q144">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  15. 사람을 처음 만날 때 대체로 편안함을 느낀다.</th>
            <td class="selection-5">
                <input type="radio" name="q15" value="0" id="q150"><label for="q150">전혀 아니다<br></label>
                <input type="radio" name="q15" value="1" id="q151"><label for="q151">약간 그렇다<br></label>
                <input type="radio" name="q15" value="2" id="q152"><label for="q152">웬만큼 그렇다<br></label>
                <input type="radio" name="q15" value="3" id="q153"><label for="q153">상당히 그렇다<br></label>
                <input type="radio" name="q15" value="4" id="q154"><label for="q154">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  16. 사람들에게 소개될 때 대체로 긴장하고 마음을<br>
                <span class="indent-two">졸인다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q16" value="0" id="q160"><label for="q160">전혀 아니다<br></label>
                <input type="radio" name="q16" value="1" id="q161"><label for="q161">약간 그렇다<br></label>
                <input type="radio" name="q16" value="2" id="q162"><label for="q162">웬만큼 그렇다<br></label>
                <input type="radio" name="q16" value="3" id="q163"><label for="q163">상당히 그렇다<br></label>
                <input type="radio" name="q16" value="4" id="q164"><label for="q164">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  17. 방에 낯선 사람이 꽉 차 있어도 거리낌 없이 들어갈<br>
                <span class="indent-two">수 있다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q17" value="0" id="q170"><label for="q170">전혀 아니다<br></label>
                <input type="radio" name="q17" value="1" id="q171"><label for="q171">약간 그렇다<br></label>
                <input type="radio" name="q17" value="2" id="q172"><label for="q172">웬만큼 그렇다<br></label>
                <input type="radio" name="q17" value="3" id="q173"><label for="q173">상당히 그렇다<br></label>
                <input type="radio" name="q17" value="4" id="q174"><label for="q174">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  18. 사람들이 모여 있는데 다가가서 어울리는 것을<br>
                <span class="indent-two">피하고 싶다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q18" value="0" id="q180"><label for="q180">전혀 아니다<br></label>
                <input type="radio" name="q18" value="1" id="q181"><label for="q181">약간 그렇다<br></label>
                <input type="radio" name="q18" value="2" id="q182"><label for="q182">웬만큼 그렇다<br></label>
                <input type="radio" name="q18" value="3" id="q183"><label for="q183">상당히 그렇다<br></label>
                <input type="radio" name="q18" value="4" id="q184"><label for="q184">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  19. 윗 사람이 나와 이야기하기를 원하면 거리낌 없이<br>
                <span class="indent-two">응한다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q19" value="0" id="q190"><label for="q190">전혀 아니다<br></label>
                <input type="radio" name="q19" value="1" id="q191"><label for="q191">약간 그렇다<br></label>
                <input type="radio" name="q19" value="2" id="q192"><label for="q192">웬만큼 그렇다<br></label>
                <input type="radio" name="q19" value="3" id="q193"><label for="q193">상당히 그렇다<br></label>
                <input type="radio" name="q19" value="4" id="q194"><label for="q194">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  20. 많은 사람들과 어울릴 때 신경이 예민해진다.</th>
            <td class="selection-5">
                <input type="radio" name="q20" value="0" id="q200"><label for="q200">전혀 아니다<br></label>
                <input type="radio" name="q20" value="1" id="q201"><label for="q201">약간 그렇다<br></label>
                <input type="radio" name="q20" value="2" id="q202"><label for="q202">웬만큼 그렇다<br></label>
                <input type="radio" name="q20" value="3" id="q203"><label for="q203">상당히 그렇다<br></label>
                <input type="radio" name="q20" value="4" id="q204"><label for="q204">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  21. 사람을 피하려는 경향이 있다.</th>
            <td class="selection-5">
                <input type="radio" name="q21" value="0" id="q210"><label for="q210">전혀 아니다<br></label>
                <input type="radio" name="q21" value="1" id="q211"><label for="q211">약간 그렇다<br></label>
                <input type="radio" name="q21" value="2" id="q212"><label for="q212">웬만큼 그렇다<br></label>
                <input type="radio" name="q21" value="3" id="q213"><label for="q213">상당히 그렇다<br></label>
                <input type="radio" name="q21" value="4" id="q214"><label for="q214">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  22. 파티나 친목회에서 기꺼이 사람들에게 말을<br>
                <span class="indent-two">건넨다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q22" value="0" id="q220"><label for="q220">전혀 아니다<br></label>
                <input type="radio" name="q22" value="1" id="q221"><label for="q221">약간 그렇다<br></label>
                <input type="radio" name="q22" value="2" id="q222"><label for="q222">웬만큼 그렇다<br></label>
                <input type="radio" name="q22" value="3" id="q223"><label for="q223">상당히 그렇다<br></label>
                <input type="radio" name="q22" value="4" id="q224"><label for="q224">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  23. 사람들이 많이 모인 집단에서는 좀처럼 마음이<br>
                <span class="indent-two">편하지 않다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q23" value="0" id="q230"><label for="q230">전혀 아니다<br></label>
                <input type="radio" name="q23" value="1" id="q231"><label for="q231">약간 그렇다<br></label>
                <input type="radio" name="q23" value="2" id="q232"><label for="q232">웬만큼 그렇다<br></label>
                <input type="radio" name="q23" value="3" id="q233"><label for="q233">상당히 그렇다<br></label>
                <input type="radio" name="q23" value="4" id="q234"><label for="q234">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  24. 사람들과 어울려야 하는 약속을 피하려고 자주<br>
                <span class="indent-two">핑계를 생각해낸다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q24" value="0" id="q240"><label for="q240">전혀 아니다<br></label>
                <input type="radio" name="q24" value="1" id="q241"><label for="q241">약간 그렇다<br></label>
                <input type="radio" name="q24" value="2" id="q242"><label for="q242">웬만큼 그렇다<br></label>
                <input type="radio" name="q24" value="3" id="q243"><label for="q243">상당히 그렇다<br></label>
                <input type="radio" name="q24" value="4" id="q244"><label for="q244">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  25. 때때로 사람들을 소개시켜 주는 책임을 맡는다.</th>
            <td class="selection-5">
                <input type="radio" name="q25" value="0" id="q250"><label for="q250">전혀 아니다<br></label>
                <input type="radio" name="q25" value="1" id="q251"><label for="q251">약간 그렇다<br></label>
                <input type="radio" name="q25" value="2" id="q252"><label for="q252">웬만큼 그렇다<br></label>
                <input type="radio" name="q25" value="3" id="q253"><label for="q253">상당히 그렇다<br></label>
                <input type="radio" name="q25" value="4" id="q254"><label for="q254">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  26. 공식적으로 사람들과 어울려야 하는 모임은<br>
                <span class="indent-two">피하려고 한다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q26" value="0" id="q260"><label for="q260">전혀 아니다<br></label>
                <input type="radio" name="q26" value="1" id="q261"><label for="q261">약간 그렇다<br></label>
                <input type="radio" name="q26" value="2" id="q262"><label for="q262">웬만큼 그렇다<br></label>
                <input type="radio" name="q26" value="3" id="q263"><label for="q263">상당히 그렇다<br></label>
                <input type="radio" name="q26" value="4" id="q264"><label for="q264">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  27. 사람들과 어울려야 하는 약속이면 대체로 다<br>
                <span class="indent-two">지킨다.</span></th>
            <td class="selection-5">
                <input type="radio" name="q27" value="0" id="q270"><label for="q270">전혀 아니다<br></label>
                <input type="radio" name="q27" value="1" id="q271"><label for="q271">약간 그렇다<br></label>
                <input type="radio" name="q27" value="2" id="q272"><label for="q272">웬만큼 그렇다<br></label>
                <input type="radio" name="q27" value="3" id="q273"><label for="q273">상당히 그렇다<br></label>
                <input type="radio" name="q27" value="4" id="q274"><label for="q274">매우 그렇다<br></label>
            </td>
        </tr>
        <tr>
            <th><span class="list-icon"></span>  28. 다른 사람들과 쉽게 친해질 수 있다.</th>
            <td class="selection-5">
                <input type="radio" name="q28" value="0" id="q280"><label for="q280">전혀 아니다<br></label>
                <input type="radio" name="q28" value="1" id="q281"><label for="q281">약간 그렇다<br></label>
                <input type="radio" name="q28" value="2" id="q282"><label for="q282">웬만큼 그렇다<br></label>
                <input type="radio" name="q28" value="3" id="q283"><label for="q283">상당히 그렇다<br></label>
                <input type="radio" name="q28" value="4" id="q284"><label for="q284">매우 그렇다<br></label>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class="btn-container">
    <a href="#" class="action-button shadow animate blue">사회불안 자가진단 결과보기</a>
</div>

<div class="resultbox">
    <div class="container clsShowHide" id="diagnosis1">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 0 ~ 35점</h4>
        <p>사회적 관계에서 그다지 불편감과 불안을 느끼지 않습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis2">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 36 ~ 70점</h4>
        <p>사회적 관계에서 중간 정도의 불안을 경험하고 있으며, 때로는 불편한 상황을 회피하 기도 합니다. 그러나 그 정도는 그렇게까지 문제되지 않습니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis3">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 71 ~ 87점</h4>
        <p>사회적 관계에서 상당한 정도로 불편감과 불안을 경험하고 있으며, 사회공포증일 가능성도 있습니다. 사회적 관계에서의 불편감이 지속되면 전문가를 찾아 상담할 것을 권합니다.</p>
    </div>

    <div class="container clsShowHide" id="diagnosis4">
        <h2>자가진단 결과보기</h2>
        <h4><span class="list-icon"></span> 88 ~ 112점</h4>
        <p>심한 정도의 사회불안을 경험하면서, 여러 상황들을 회피하고 있으며, 이것이 스스로의 삶을 힘들게 하고 있습니다. 조속한 시일내에 전문가를 통해 상담받을 것을 권합니다.</p>
    </div>
</div>