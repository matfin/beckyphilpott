<nav>
    <ol>
        <li>
            <a href="<?=base_href;?>album/fashion.html" title="Fashion">
                Fashion
            </a>
            <?php perch_content('fashion_nav');?>
        </li>
        <li <?=(strcmp(page, 'album') == 0) && (strcmp($mainalbum , 'places-ive-been') == 0) ? 'class="subnav-shown"':'' ?>>
            <a class="expandable-sub" href="#" title="Places I&#39;ve been">
                Places I&#39;ve been
            </a>
            <?php perch_content('places_ive_been_nav');?>
        </li>
        <li>
            <a href="<?=base_href;?>album/people-ive-seen.html" title="People I&#39;ve Seen">
                People I&#39;ve Seen
            </a>
            <?php perch_content('people_ive_seen_nav');?>
        </li>
        <li>
            <a href="<?=base_href;?>album/landscapes.html" title="Landscapes">
                Landscapes
            </a>
            <?php perch_content('landscapes_nav');?>
        </li>
        <li>
            <a href="<?=base_href;?>contact.html" title="Contact">
                Contact
            </a>
        </li>
        <li>
            <a href="http://beckyphilpott.blogspot.com" title="Blog">
                Blog
            </a>
        </li>
    </ol>
</nav>