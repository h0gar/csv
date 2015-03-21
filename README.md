#Csv

A lightweight package creat csv files.

- [Installation](#installation)
- [Usage](#usage)

<a name="installation"></a>
##Installation

	composer require h0gar/csv *

<a name="usage"></a>
##Usage

	$csv = new \H0gar\Csv\Csv([
		'id',
		'firstname',
		'name'
	]);

	$content = [
		[
			1,
			'foo',
			'bar'
		],
		// ..
	];

	foreach($content as $row)
		$csv->add($row);

	$result = $csv->render();

##Contributing

Please submit all issues and pull requests to the [h0gar/csv](http://github.com/h0gar/csv) repository.

##License

Open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)