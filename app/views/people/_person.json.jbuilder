json.extract! person, :id, :fname, :lname, :email, :age, :phone, :gender, :created_at, :updated_at
json.url person_url(person, format: :json)