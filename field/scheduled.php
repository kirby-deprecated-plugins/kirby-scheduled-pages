<?php
class ScheduledField extends BaseField {
	public function input() {
		$html = '';
		$html .= tpl::load( __DIR__ . DS . 'template.php', $data = array(
			'field' => $this,
			'page' => $this->page()
		));
		return $html;
	}

	public function isScheduled( $type, $page ) {
		$format['date'] = 'Y-m-d';
		$format['time'] = 'H:i';
		$datetime1 = new DateTime($page->getScheduled($type));
		$datetime2 = new DateTime(date( $format[$type] ));
		$interval = $datetime1->diff($datetime2);
		$sign = $interval->format('%R');

		echo $sign;
		if( $sign == '+' ) {
			return true;
		}
		return false;
	}
}