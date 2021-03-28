import ExampleComponent from "../components/ExampleComponent";

const {mount} = require("@vue/test-utils");

test('テストのためのテスト', () => {
    const component = mount(ExampleComponent);
    console.log('a')
});