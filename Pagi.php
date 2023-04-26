  public static function make_pagination($total_records, $per_page, $current_page, $total_page, $route)
    {
        $html = '';

        if (ceil($total_records / $per_page) > 0) {
            $html .= '<ul class="pagination justify-content-center mt-4">';
            if ($current_page > 1) {
                $html .= '<li class="prev page-item"><a class="page-link"
                        href="' . $route . '?page=' . ($current_page - 1) . '">Prev</a></li>';
            }

            if ($current_page > 3) {
                $html .= '<li class="start page-item"><a class="page-link" href="' . $route . '?page=1">1</a></li>
                <li class="dots page-link">........</li>';
            }

            if ($current_page - 2 > 0) {
                $html .= '<li class="page page-item"><a class="page-link"
                        href="' . $route . '?page=' . ($current_page - 2) . '">' . ($current_page - 2) . '</a></li>';
            }
            if ($current_page - 1 > 0) {
                $html .= '<li class="page"><a class="page-link"
                        href="' . $route . '?page=' . ($current_page - 1) . '">' . ($current_page - 1) . '</a></li>';
            }

            $html .= '<li class="active page-item"><a class="page-link"
                    href="' . $route . '?page=' . $current_page . '">' . $current_page . '</a></li>';

            if ($current_page + 1 < ceil($total_records / $per_page) + 1) {
                $html .= '<li class="page page-item"><a class="page-link"
                        href="' . $route . '?page=' . ($current_page + 1) . '">' . ($current_page + 1) . '</a></li>';
            }
            if ($current_page + 2 < ceil($total_records / $per_page) + 1) {
                $html .= '<li class="page page-item"><a class="page-link"
                        href="' . $route . '?page=' . ($current_page + 2) . '">' . ($current_page + 2) . '</a></li>';
            }

            if ($current_page < ceil($total_records / $per_page) - 2) {
                $html .= '<li class="dots">........</li>
                <li class="end page-item"><a class="page-link"
                        href="' . $route . '?page=' . (ceil($total_records / $per_page)) . '">' . (ceil($total_records / $per_page)) . '</a>
                </li>';
            }

            if ($current_page < ceil($total_records / $per_page)) {
                $html .= '<li class="next page-item"><a class="page-link"
                        href="' . $route . '?page=' . ($current_page + 1) . '">Next</a></li>';
            }
            $html .= '</ul>';
        }
        return $html;
    }