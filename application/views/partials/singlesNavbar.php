    <div class="row d-xs-block d-lg-none">
        <ul uk-accordion class="col-12 p-3 m-0">
            <li>
                <a class="uk-accordion-title" href="#">All Singles</a>
                <div class="uk-accordion-content">
                    <button type="button" class="btn btn-sm btn-light col-12">My Matches <span class="float-right uk-badge"><?= count($myMatchesCount)  ?></span></button>
                    <button type="button" class="btn btn-sm btn-light col-12">Accepted Members <span class="float-right uk-badge">10</span></button>
                    <button type="button" class="btn btn-sm btn-light col-12">New Matches <span class="float-right uk-badge">1</span></button>
                    <button type="button" class="btn btn-sm btn-light col-12">My Favourites <span class="float-right uk-badge">1</span></button>
                    <button type="button" class="btn btn-sm btn-light col-12">Members Intrusted In Me <span class="float-right uk-badge">1</span></button>
                    <button type="button" class="btn btn-sm btn-light col-12">Visited Profiles <span class="float-right uk-badge">1</span></button>
                    <button type="button" class="btn btn-sm btn-light col-12">Blocked Profiles <span class="float-right uk-badge">1</span></button>
                </div>
            </li>
        </ul>
    </div>
    <div class="d-none d-lg-block mt-5">
        <div class="row">
            <button class="btn btn-sm btn-light col-md-3 col-12 active">All Singles <span class="float-right uk-badge"><?= $allSinglesCount['AllSinglesCount'] ?></span></button>
            <button class="btn btn-sm btn-light col-md-3 col-12">My Matches <span class="float-right uk-badge"><?= count($myMatchesCount)  ?></span></button>
            <button type="button" class="btn btn-sm btn-light col-md-3 col-12">Accepted Members <span class="float-right uk-badge">10</span></button>
            <button type="button" class="btn btn-sm btn-light col-md-3 col-12">New Matches <span class="float-right uk-badge">1</span></button>
            <button type="button" class="btn btn-sm btn-light col-md-3 col-12">My Favourites <span class="float-right uk-badge">1</span></button>
            <button type="button" class="btn btn-sm btn-light col-md-3 col-12">Members Intrusted In Me <span class="float-right uk-badge">1</span></button>
            <button type="button" class="btn btn-sm btn-light col-md-3 col-12">Visited Profiles <span class="float-right uk-badge">1</span></button>
            <button type="button" class="btn btn-sm btn-light col-md-3 col-12">Blocked Profiles <span class="float-right uk-badge">1</span></button>
        </div>
    </div>