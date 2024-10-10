server "ds-wp-test1.cul.columbia.edu", user: fetch(:remote_user), roles: %w{web app}
ask :branch, proc { `git tag --sort=version:refname`.split("\n").last }

set :url, 'https://podcasts-test.library.columbia.edu'
