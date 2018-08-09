<?php
/**
 * 이 파일은 iModule Selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * Selfdiagnosis 드롭다운 템플릿
 * 
 * - 탭모듈 적용 시, 화면이 작아지면 탭을 없애고 이것을 활성화 시킬 것이다.
 * 
 * @file /modules/selfdiagnosis/templets/default/dropdown.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license MIT License
 * @version 0.0.1
 * @modified 2018. 7. 30.
 */
if (defined('__IM__') == false) exit;

$diagnosis = Array('sub01'=>'우울', 'sub02'=>'불안', 'sub03'=>'사회불안', 'sub04'=>'발표불안', 'sub05'=>'고독감', 'sub06'=>'분노',
                   'sub07'=>'인정욕구', 'sub08'=>'진로정체감', 'sub09'=>'인터넷중독', 'sub10'=>'사랑유형');
?>

<?php 
    $selectedTab = $me->getIdx() == null ? 'sub01' : $me->getIdx(); // 현재위치 가져오기. ?>

    <div data-role="tabbar">
        <div>
            <ul>
                <?php
                foreach($diagnosis as $key=>$value) { ?>
                <li <?php if ($key == $selectedTab) echo 'class="selected"'; ?>>
                    <a href="<?php echo $IM->getUrl(null, null, null, $key, false); ?>"><?php echo $value; ?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <select class="tab-dropdown">
        <?php
        foreach($diagnosis as $key=>$value) { ?>
        <option value="<?php echo $key; ?>"<?php echo $key == $selectedTab ? ' selected="selected"' : ''; ?>><?php echo $value; ?></option>
        <?php } ?>
    </select>

