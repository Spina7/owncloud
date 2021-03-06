<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosNotificationPreviewVisibility File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* IosNotificationPreviewVisibility class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosNotificationPreviewVisibility extends Enum
{
    /**
    * The Enum IosNotificationPreviewVisibility
    */
    const NOT_CONFIGURED = "notConfigured";
    const ALWAYS_SHOW = "alwaysShow";
    const HIDE_WHEN_LOCKED = "hideWhenLocked";
    const NEVER_SHOW = "neverShow";
}