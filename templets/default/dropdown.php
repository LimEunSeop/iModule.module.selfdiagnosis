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

$config = $this->IM->getPage(); // 현재 페이지의 설정값
?>

<?php 
if ($config->context->module == 'tab') { // 탭모듈일때만 반응형 드롭다운 탭 보이게 할것임. 
    $selectedTab = $this->IM->getModule('tab')->getView() == null ? 'sub01' : $this->IM->getModule('tab')->getView(); // 현재위치 가져오기. ?>

    <select class="tab-dropdown">
        <?php
        foreach($diagnosis as $key=>$value) { ?>
        <option value="<?php echo $key; ?>"<?php echo $key == $selectedTab ? ' selected="selected"' : ''; ?>><?php echo $value; ?></option>
        <?php } ?>
    </select>
<?php } ?>

