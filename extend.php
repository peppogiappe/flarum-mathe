<?php

/*
 * This file is part of Flarum.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use Flarum\Event\ConfigureClientView;
use Illuminate\Contracts\Events\Dispatcher;

return [

  (new Extend\Frontend('forum'))
      ->content(function (Document $document) {
          $document->head[] = '
          <div class="background">
            <div class="container">
              <p>This project has been funded with support from the European Commission. This web site reflects the views only of the author, and the Commission cannot be held responsible for any use which may be made of the information contained therein.</p>
            </div>
          </div>
          ';
      }),

  (new Extend\Frontend('forum'))
    ->js(__DIR__.'/js/dist/forum.js')

];
