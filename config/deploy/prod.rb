server "ds-wp-prod1.cul.columbia.edu", user: fetch(:remote_user), roles: %w{web app}
ask :branch, proc { `git tag --sort=version:refname`.split("\n").last }

set :url, 'https://podcasts.library.columbia.edu'
