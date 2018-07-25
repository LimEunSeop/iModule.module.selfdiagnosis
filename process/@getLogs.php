<?php
/**
 * 이 파일은 iModule Selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 * 
 * 자가진단 로그 목록을 불러온다.
 *
 * @file /modules/selfdiagnosis/process/@getLogs.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license GPLv3
 * @version 0.0.1
 * @modified 2018. 7. 25.
 */
if (defined('__IM__') == false) exit;

$start = Request('start');
$limit = Request('limit');
$sort = Request('sort') ? Request('sort') : 'idx';
$dir = Request('dir') ? Request('dir') : 'asc';

// 할일 할당돼있는 전체 회원 수 구하기
$lists = $this->db()->select($this->table->log)->orderBy($sort,$dir);
$total = $lists->copy()->count(); // log 테이블 레코드 갯수
if ($limit > 0) $lists->limit($start,$limit);
$lists = $lists->get();

$results->success = true;
$results->lists = $lists;
$results->total = $total;
?>