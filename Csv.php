<?php
namespace H0gar\Csv;

class Csv {
	protected $headers;
	protected $rows = [];

	public function __construct(array $headers = []) {
		$this->headers = $headers;
	}

	public function add(array $row) {
		$this->rows[] = $row;
	}

	public function render() {
		$fp = fopen('php:#memory', 'w+');
		fputcsv($fp, $this->headers, ';', '"');
		foreach($this->rows as $row)
			fputcsv($fp, $row, ';', '"');

		rewind($fp);
		$res = trim(stream_get_contents($fp));
		fclose($fp);

		$res = mb_convert_encoding($res, 'UTF-16LE', 'UTF-8');
		$res = chr(255) . chr(254) . $res;

		return $res;
	}
}