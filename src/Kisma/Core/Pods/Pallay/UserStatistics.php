<?php
namespace Kisma\Core\Pods\Pallay;

use Kisma\Core\Enums\HttpMethod;
use Kisma\Core\SeedBag;
use Kisma\Core\Services\SeedService;

/**
 * ServerStatistics.php
 * A generic statistics object for a generic server
 *
 * @package Kisma\Core\Pods\Pallay
 *
 * @property array|\stdClass $requests
 * @property array|\stdClass $responses
 * @property array|\stdClass $errors
 * @property string          $uptime
 * @property array|\stdClass $system_info
 */
class ServerStatistics extends SeedBag
{
	/**
	 * @param array $contents
	 */
	public function __construct( $contents = array() )
	{
		$this->setFixedSize( true );

		//	Register our properties
		$this->merge(
			array(
				 'requests'    => null,
				 'responses'   => null,
				 'errors'      => null,
				 'uptime'      => null,
				 'system_info' => null,
			)
		);

		parent::__construct( $contents );
	}
}
