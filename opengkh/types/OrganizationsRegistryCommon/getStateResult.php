<?php

namespace gisgkh\types\OrganizationsRegistryCommon;

/**
 * Возврат статуса отправленного сообщения
 */
class getStateResult extends \gisgkh\types\Base\BaseAsyncResponseType
{
    /**
     * Описание ошибок контролей или бизнес-процесса
     * @var \gisgkh\types\Base\ErrorMessageType $ErrorMessage
     */
    public $ErrorMessage;

    /**
     * Результат выполнения C_UD
     * @var \gisgkh\types\Base\CommonResultType[] $ImportResult
     */
    public $ImportResult;

    /**
     * 
     * @var \gisgkh\types\OrganizationsRegistryCommon\exportOrgRegistryResultType[] $exportOrgRegistryResult
     */
    public $exportOrgRegistryResult;

    /**
     * 
     * @var \gisgkh\types\OrganizationsRegistryCommon\exportDataProviderResultType[] $exportDataProviderResult
     */
    public $exportDataProviderResult;

    /**
     * [READ ONLY] Версия элемента, начиная с которой поддерживается совместимость
     * @var string $version
     */
    public $version = "10.0.2.1";
}
