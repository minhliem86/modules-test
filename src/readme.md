/** Package Admin INIT For new project **/


/** ServiceProvider Needed **/

Unisharp\Laravelfilemanager\LaravelFilemanagerServiceProvider::class,
Intervention\Image\ImageServiceProvider::class,
Collective\Html\HtmlServiceProvider::class,
Zizaco\Entrust\EntrustServiceProvider::class,
Yajra\Datatables\DatatablesServiceProvider::class,
developeruz\Analytics\AnalyticsServiceProvider::class,
\Krucas\Notification\NotificationServiceProvider::class,

/** ALIAS **/
'Image' => Intervention\Image\Facades\Image::class,
'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class,
'Entrust'   => Zizaco\Entrust\EntrustFacade::class,
'Datatables' => Yajra\Datatables\Facades\Datatables::class,
'Analytics' => developeruz\Analytics\AnalyticsFacade::class,
