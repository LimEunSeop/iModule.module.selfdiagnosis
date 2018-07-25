<?php
/**
 * 이 파일은 iModule selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 * 
 * 자가진단 로그를 추가한다.
 *
 * @file /modules/selfdiagnosis/process/log.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license MIT License
 * @version 0.0.1
 * @modified 2018. 7. 24.
 */

if (defined('__IM__') == false) exit;

$memberModule = $this->IM->getModule('member');

$insert['midx'] = $memberModule->getMember()->idx;
$insert['name'] = $insert['midx'] == 0 ? 'Anonymous': $memberModule->getMember()->name;
$insert['subject'] = Request('subject');
$insert['date'] = time();

$this->db()->insert($this->table->log, $insert)->execute();

$results->success = true;
?>