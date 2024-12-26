<?php
namespace JoFernando\Module\DataHoje\Site\Dispatcher;

\defined('_JEXEC') or die;

use DateTime;
use IntlDateFormatter;
use Joomla\CMS\Dispatcher\DispatcherInterface;

class Dispatcher implements DispatcherInterface
{
    public function dispatch()
    {
        $data = new DateTime();
        $formatter = new IntlDateFormatter(
            null,
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
        );
        echo '<p class="jo-data">'.$formatter->format($data).'</p>';
    }
}