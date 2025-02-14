<?php
/**
 * BigBlueButton open source conferencing system - https://www.bigbluebutton.org/.
 *
 * Copyright (c) 2016-2018 BigBlueButton Inc. and by respective authors (see below).
 *
 * This program is free software; you can redistribute it and/or modify it under the
 * terms of the GNU Lesser General Public License as published by the Free Software
 * Foundation; either version 3.0 of the License, or (at your option) any later
 * version.
 *
 * BigBlueButton is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE. See the GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License along
 * with BigBlueButton; if not, see <http://www.gnu.org/licenses/>.
 */
namespace BigBlueButton\Responses;

/**
 * Class SetConfigXMLResponse
 * @package BigBlueButton\Parameters
 * @deprecated since 4.0. Will be removed in 4.1. The setConfigXML API was related to the old Flash client which is no longer available since BigBlueButton 2.2. In BigBlueButton 2.3 the whole API call was removed.
 */
class SetConfigXMLResponse extends BaseResponse
{
    public function __construct(\SimpleXMLElement $xml)
    {
        @trigger_error(sprintf('"%s" is deprecated since 4.0 and will be removed in 4.1. The setConfigXML API was related to the old Flash client which is no longer available since BigBlueButton 2.2. In BigBlueButton 2.3 the whole API call was removed.', self::class), E_USER_DEPRECATED);

        parent::__construct($xml);
    }

    /**
     * @return bool
     */
    public function getToken()
    {
        return $this->rawXml->configToken->__toString();
    }
}
