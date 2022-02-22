<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_MimePart extends Swift_Mime_MimePart
{
 public function __construct($body = null, $contentType = null, $charset = null)
 {
 \call_user_func_array([$this, 'MailPoetVendor\\Swift_Mime_MimePart::__construct'], Swift_DependencyContainer::getInstance()->createDependenciesFor('mime.part'));
 if (!isset($charset)) {
 $charset = Swift_DependencyContainer::getInstance()->lookup('properties.charset');
 }
 $this->setBody($body);
 $this->setCharset($charset);
 if ($contentType) {
 $this->setContentType($contentType);
 }
 }
}
