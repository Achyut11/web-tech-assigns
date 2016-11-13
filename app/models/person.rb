class Person
  include Mongoid::Document
  field :fname, type: String
  field :lname, type: String
  field :email, type: String
  field :age, type: Integer
  field :phone, type: Integer
  field :gender, type: String
end
