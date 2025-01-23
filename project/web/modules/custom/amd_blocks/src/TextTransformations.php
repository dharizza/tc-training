<?php

declare(strict_types=1);

namespace Drupal\amd_blocks;

use Drupal\Core\Logger\LoggerChannel;
use Drupal\Core\Logger\LoggerChannelFactory;

/**
 * @todo Add class description.
 */
final class TextTransformations {
  /**
   * Logger factory.
   * 
   * @var \Drupal\Core\Logger\LoggerChannel
   */
  protected LoggerChannel $logger;

  public function __construct(LoggerChannelFactory $loggerFactory) {
    $this->logger = $loggerFactory->get('amd_blocks');
  }

  public function reverse($text) {
    // \Drupal::logger('amd_blocks')->warning('The text was reversed.');
    $this->logger->warning('The text was reversed.');
    return strrev($text);
  }

  public function uppercase($text) {
    // \Drupal::logger('amd_blocks')->warning('The text was transformed to be uppercase.');
    $this->logger->warning('The text was transformed to be uppercase.');
    return strtoupper($text);
  }

  public function titleCase($text) {
    // \Drupal::logger('amd_blocks')->warning('The text was transformed to be title case.');
    $this->logger->warning('The text was transformed to be title case.');
    return ucfirst($text);
  }

}
