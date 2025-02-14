<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\MigrateAndLinkV4ShopHandler' shared service.

return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\MigrateAndLinkV4ShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\MigrateAndLinkV4ShopHandler(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] : ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] : $this->load('getShopContextService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] : $this->load('getShopSessionService.php')) && false ?: '_'});
